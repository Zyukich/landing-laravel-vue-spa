import Vue from 'vue'
import Vuex from 'vuex'
import auth from '../store/modules/auth'
import clients from "./modules/clients"
import applications from "./modules/applications"
import categories_cases from "./modules/categories_cases"
import cases from "./modules/cases"

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        auth,
        clients,
        applications,
        cases,
        categories_cases,
    }
})
