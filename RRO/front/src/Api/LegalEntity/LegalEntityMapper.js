import LegalEntity from "./LegalEntity";
import PossibleFilter from "./PossibleFilter";

export default class {

    mapLegalEntityList(data) {
        const legalEntities = [];

        for (const legalEntitiesKey in data) {
            legalEntities.push(
                new LegalEntity(
                    data[legalEntitiesKey].id,
                    data[legalEntitiesKey].okpo,
                    data[legalEntitiesKey].city,
                    data[legalEntitiesKey].name,
                    data[legalEntitiesKey].created_at,
                    data[legalEntitiesKey].updated_at
                )
            );
        }

        return legalEntities;
    }

    mapPossibleFilters(data, column)
    {
        let possibleFilters = [];

        for (const dataKey in data) {
            possibleFilters.push(PossibleFilter.make(data[dataKey], column))
        }

        return possibleFilters;
    }

    mapFilters(filters) {
        let filtersArray = {'cities': [], 'names': []}

        for (const filterKey in filters) {
            let filterValue = filters[filterKey]

            if (filterValue._column === 'city') {
                filtersArray['cities'].push(filterValue._value)
            }
            if (filterValue._column === 'name') {
                filtersArray['names'].push(filterValue._value)
            }
        }

        console.log(filtersArray)
        return filtersArray;
    }
}