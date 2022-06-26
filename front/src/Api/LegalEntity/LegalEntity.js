export default class LegalEntity {
    constructor(id, okpo, city, name, createdAt, updatedAt) {
        this.id = id;
        this.okpo = okpo;
        this.city = city;
        this.name = name;
        this.createdAt = createdAt;
        this.updatedAt = updatedAt;
    }

    get getId() {
        return this.id;
    }

    get getOkpo() {
        return this.okpo;
    }

    get getCity() {
        return this.city;
    }

    get getName() {
        return this.name;
    }

    get getCreatedAt() {
        return this.createdAt;
    }

    get getUpdatedAt() {
        return this.updatedAt;
    }
}