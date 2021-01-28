require('./bootstrap')

import 'sweetalert'
import Vue from 'vue'

import PacienteTable from './components/paciente/Index'

new Vue({
    el: '#app',
    components: {
        PacienteTable
    }
})
