import axios from "axios";
import LegalEntity from "../LegalEntity/LegalEntity";
import DrugStore from "./DrugStore";

export default class DrugStoreService {

    static drugStores = [];

    static async getDrugStores(id) {
        const drugStores = await axios.list("https://work/api/drug-store/list/", [
            ['id', id]
        ]);
        const data = drugStores.data.data.data;

        for (const drugStoreKey in data) {
            this.drugStores.push(
                new DrugStore(
                    data[drugStoreKey].id,
                    data[drugStoreKey].legal_entity_id,
                    data[drugStoreKey].city,
                    data[drugStoreKey].phone,
                    data[drugStoreKey].full_address,
                    data[drugStoreKey].created_at,
                    data[drugStoreKey].updated_at
                )
            );
        }

        return this.drugStores;
    }
}