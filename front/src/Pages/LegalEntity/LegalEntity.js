import React, {useEffect, useState} from 'react';
import LegalEntityTable from "./LegalEntityTable";
import FiltersForm from "./Filters/FiltersForm";
import LegalEntityService from "../../Api/LegalEntity/LegalEntityService";
import classes from "./LegalEntity.module.css";
import PossibleFilter from "../../Api/LegalEntity/PossibleFilter";

function LegalEntity() {

    const [legalEntities, setLegalEntities] = useState([]);
    const [isLegalEntitiesLoading, setIsLegalEntitiesLoading] = useState(false);
    const [possibleFilters, setPossibleFilters] = useState([]);
    const [isFiltersLoading, setIsFiltersLoading] = useState(false);
    const [filters, setFilters] = useState([])

    useEffect(() => {
        getLegalEntities()
        getFiltersValues('city')
    }, [filters])

    async function getLegalEntities() {
        const legalEntities = await LegalEntityService.make().getLegalEntitiesList(filters)

        setLegalEntities(legalEntities)
        setIsLegalEntitiesLoading(true)
    }

    async function getFiltersValues(column) {
        const filterValues = await LegalEntityService.make().getFilterValues(column)

        setPossibleFilters(filterValues)
        setIsFiltersLoading(true)
    }

    const creatLegalEntity = (newLegalEntity) => {
        setLegalEntities([...legalEntities, {...newLegalEntity}])
    }

    const removeLegalEntity = (removedLegalEntity) => {
        if (LegalEntityService.delete(removedLegalEntity.id)) {
            setLegalEntities(legalEntities.filter(legalEntity => legalEntity.id !== removedLegalEntity.id))
        } else {
            // TODO: message delete is failed
        }
    }

    const addFilter = (possibleFilter, column) => {
        console.log(possibleFilter, column)
        possibleFilter = new PossibleFilter(possibleFilter, column)
        setFilters([...filters, {...possibleFilter}])
        console.log(filters)
    }

    return (
        <div className={classes.main}>

            <div className={classes.filters}>
                {
                    isFiltersLoading
                        ? (
                            <FiltersForm
                                possibleFilters = {possibleFilters}
                                filter = {addFilter}
                            />
                        )
                        : <div>Filters loading...</div>
                }
            </div>

            <div className={classes.legalEntityForm}>
                <div>
                    {
                        isLegalEntitiesLoading
                            ? (
                                legalEntities.length !== 0
                                    ? <LegalEntityTable
                                        legalEntities = {legalEntities}
                                        remove = {removeLegalEntity}
                                        create = {creatLegalEntity}
                                    />
                                    : <div>Legal Entities not find</div>
                            )
                            : <div>Searching</div>
                    }
                </div>
            </div>
        </div>
    );
}

export default LegalEntity;