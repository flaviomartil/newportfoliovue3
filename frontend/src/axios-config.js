import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://192.168.114.113:8082/api', // substitua pelo seu domínio
    headers: {
        'Content-Type': 'application/json',
    },
});

export default apiClient;