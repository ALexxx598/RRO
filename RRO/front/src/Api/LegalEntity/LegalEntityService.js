import axios from "axios";
import LegalEntity from "./LegalEntity";
import PossibleFilter from "./PossibleFilter";
import LegalEntityMapper from "./LegalEntityMapper";

export default class LegalEntityService {

    constructor(mapper) {
        this.mapper = new LegalEntityMapper();
    }

    static make () {
        return new LegalEntityService();
    }

    async getLegalEntitiesList(filters)
    {
        const request = this.mapper.mapFilters(filters);
        // console.log(request)
        const legalEntitiesApi = await axios.post("https://work/api/legal-entity/list", {
            referrerPolicy: "origin-when-cross-origin",
            request
        });

        return this.mapper.mapLegalEntityList(legalEntitiesApi.data.data.data);
    }

    async getFilterValues(column)
    {
        const legalEntitiesApi = await axios.get("https://work/api/legal-entity/filter-values/" + column, {
            referrerPolicy: "origin-when-cross-origin"
        });

        return this.mapper.mapPossibleFilters(legalEntitiesApi.data.data.values, column)
    }

    static async add(newLegaEntity) {
        const legalEntity = await axios.post();

        return legalEntity.data;
    }

    static async update() {
        const legalEntities = await axios.put();

        return legalEntities.data;
    }

    static async delete(id) {
        const api = await axios.delete("https://work/api/legal-entity/" + id);

        return api.status;
    }

    static async getLegalEntity() {
        const legalEntity = await axios.get();

        return legalEntity.data;
    }
}