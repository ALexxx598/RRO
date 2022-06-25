export default class {
    constructor(id, legalEntityId, fullAddress, city, phone, createAt, updatedAt) {
        this._id = id;
        this._legalEntityId = legalEntityId;
        this._fullAddress = fullAddress;
        this._city = city;
        this._phone = phone;
        this._createAt = createAt;
        this._updatedAt = updatedAt;
    }

    get id() {
        return this._id;
    }

    get legalEntityId() {
        return this._legalEntityId;
    }

    get fullAddress() {
        return this._fullAddress;
    }

    get city() {
        return this._city;
    }

    get phone() {
        return this._phone;
    }

    get createAt() {
        return this._createAt;
    }

    get updatedAt() {
        return this._updatedAt;
    }
}