import React, {useEffect, useState} from "react";
import MyButton from "../../Components/UI/Button/MyButton";
import DrugStore from "../../Api/DrugStore/DrugStore";
import DrugStoreService from "../../Api/DrugStore/DrugStoreService";

const LegalEntityItem = function ({legalEntity, remove}) {

    const [drugStores, setDrugStore] = useState([])

    function updateLegalEntity() {

    }

    async function showDrugStores(id) {
        const drugStores = await DrugStoreService.getDrugStores(id)
    }

    return (
        <tbody>
            <tr>
                <th>{legalEntity.name}</th>
                <th>{legalEntity.city}</th>
                <th>{legalEntity.okpo}</th>
                <th>{legalEntity.createdAt}</th>
                <th>{legalEntity.updatedAt}</th>
                <th><MyButton onClick = {updateLegalEntity}>Update</MyButton></th>
                <th><MyButton onClick = {() => showDrugStores(legalEntity.id)}>Drug stores</MyButton></th>
                <th><MyButton onClick = {() => remove(legalEntity)}>Delete</MyButton></th>
            </tr>
        </tbody>
    );
}

export default LegalEntityItem;