import React from "react";
import LegalEntityItem from "./LegalEntityItem";
import classes from "../../Components/UI/Table/MyTable.module.css";
import {BrowserRouter, Router} from "react-router-dom";
import LegalEntityForm from "./LegalEntityForm";


const LegalEntityTable = function ({legalEntities, remove, create}) {
    return (
        <div className="legal_entity">
            <div className = "entity_content">
                <h2 style={{textAlign: "center"}}>LegalEntities</h2>

                <LegalEntityForm/>

                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>OKPO</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                    </tr>
                    </thead>
                    {legalEntities.map((legalEntity) =>
                        <LegalEntityItem
                            legalEntity = {legalEntity}
                            key={legalEntity.getId}
                            remove = {remove}
                        />
                    )}
                </table>
            </div>
        </div>
    );
}

export default LegalEntityTable;