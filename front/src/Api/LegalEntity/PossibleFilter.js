export default class PossibleFilter {
    constructor(value, column) {
        this._value = value;
        this._column = column;
    }

    static make(value, column) {
        return new PossibleFilter(value, column)
    }

    get value() {
        return this._value;
    }

    get column() {
        return this._column;
    }
}