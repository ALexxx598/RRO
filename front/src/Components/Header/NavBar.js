import React from 'react';
import classes from "./NavBar.module.css";
import MyButton from "../UI/Button/MyButton";

const NavBar = () => {
    return (
        <div className={classes.components}>
            <div className={classes.item}><a href={'/legalEntity'}>Legal Entities</a></div>
            <div className={classes.item}><a href={'/about'}>About</a></div>
        </div>
    );
};

export default NavBar;