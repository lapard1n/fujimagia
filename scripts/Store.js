class Store{

    constructor() {

        this.options = {
            // Namespace. Namespace your Basil stored data
            // default: 'b45i1'
            namespace: 'fuji',

            // storages. Specify all Basil supported storages and priority order
            // default: `['local', 'cookie', 'session', 'memory']`
            storages: ['cookie', 'local'],

            // storage. Specify the default storage to use
            // default: detect best available storage among the supported ones
            storage: 'local',

            // expireDays. Default number of days before cookies expiration
            // default: 365
            expireDays: 31

        };
        this.good = null;
        this.basket = null;

        this.basil = null;

        Store.init();
    }

    get(data){

    }
    set(data){}

    static async init(){

        if(this.get('basket') == null)
        {
            
        }
    }
}