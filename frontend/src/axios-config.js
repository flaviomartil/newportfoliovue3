import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://api.flaviomartil.tech/api', // substitua pelo seu domínio
    headers: {
        'Content-Type': 'application/json',
    },
});

export default apiClient;