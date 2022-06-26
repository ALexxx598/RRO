import React, {useState} from 'react';
import MyInput from "../../Components/UI/Input/MyInput";
import MyButton from "../../Components/UI/Button/MyButton";

const LegalEntityForm = ({create}) => {

    const [legalEntity, setLegalEntity] = useState({id: '', name: '', okpo: '', city: '', createdAt: '', updatedAt: ''})

    const addLegalEntity = (e) => {
        e.preventDefault()

        const newLegalEntity = {
            ...legalEntity
        }

        create(newLegalEntity)

        setLegalEntity({id: '', name: '', city: '', okpo: ''})
    }

    return (
        <form>
            <div className="legalEntityInputs">
                <MyInput placeholder = "name" type = "text" value = {legalEntity.name} onChange = {
                    event => {
                        setLegalEntity({...legalEntity, name: event.target.value})
                    }
                }
                />
                <MyInput placeholder = "city" type = "text" value = {legalEntity.city} onChange = {
                    event => {
                        setLegalEntity({...legalEntity, city: event.target.value})
                    }
                }
                />
                <MyInput placeholder = "okpo" type = "text" value = {legalEntity.okpo} onChange = {
                    event => {
                        setLegalEntity({...legalEntity, okpo: event.target.value})
                    }
                }
                />
                <MyButton onClick = {addLegalEntity}>Add</MyButton>
            </div>
        </form>
    );
};

export default LegalEntityForm;