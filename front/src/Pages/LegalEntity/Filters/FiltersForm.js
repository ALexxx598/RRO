import React from 'react';
import MyInput from "../../../Components/UI/Input/MyInput";
import classes from "./Filters.module.css";
import MyButton from "../../../Components/UI/Button/MyButton";
import PossibleFilterItem from "./PossibleFilterItem";

const FiltersForm = ({possibleFilters, filter}) => {
    return (
        <div className={classes.block}>
            <div className={classes.head}>
                <div><h2 style={{textAlign: "center"}}>Filters</h2></div>
                <div className={classes.filter_btn}><MyButton>filter</MyButton></div>
            </div>
            <div>
                {
                    possibleFilters.map((possibleFilter, index) =>
                        <PossibleFilterItem
                            value = {possibleFilter.value}
                            key = {possibleFilter.value + index}
                            column = {possibleFilter.column}
                            addFilter = {filter}
                        />
                    )
                }
            </div>
            <div>
                <div><h3 style={{textAlign: "left"}}>Name</h3></div>
                <div className={classes.item}>
                    <div><MyInput placeholder = "name" type = "checkbox"/></div>
                    <div><span>span</span></div>
                </div>
            </div>
        </div>
    );
};

export default FiltersForm;