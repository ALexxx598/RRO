import React from 'react';
import classes from "./Filters.module.css";
import MyInput from "../../../Components/UI/Input/MyInput";
import MyButton from "../../../Components/UI/Button/MyButton";

const PossibleFilterItem = ({value, column, addFilter}) => {
    return (
        <div className={classes.item}>
            <MyButton onClick={() => {addFilter(value, column)}}>LOL</MyButton>
            <div><MyInput placeholder = "city" type = "checkbox"/></div>
            <div><span>{value}</span></div>
        </div>
    );
};

export default PossibleFilterItem;