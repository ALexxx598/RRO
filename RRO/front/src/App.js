import React, {Fragment} from "react";
import "./styles/App.css";
import LegalEntity from "./Pages/LegalEntity/LegalEntity";
import NavBar from "./Components/Header/NavBar";
import {BrowserRouter, Route, Routes, Switch} from "react-router-dom";
import LegalEntityForm from "./Pages/LegalEntity/LegalEntityForm";
import About from "./Pages/About/About";
import DrugStore from "./Pages/DrugStore/DrugStore";
import LegalEntityService from "./Api/LegalEntity/LegalEntityService";

function App() {

    return (
        <BrowserRouter>
            <div className="body">
                <div className="nav_bar">
                    <NavBar/>
                </div>
                <div className="main_content">
                    <Routes>
                        <Route path = "/legalEntity" element = {
                            <LegalEntity/>
                        }/>
                        <Route path = {'/drugStores'} element = {<DrugStore/>}/>
                        <Route path = "/about" element = {<About/>} />
                    </Routes>
                </div>
            </div>
        </BrowserRouter>
    );
}

export default App;
