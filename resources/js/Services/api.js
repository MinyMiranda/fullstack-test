import axios from 'axios';

const api = axios.create({
    baseURL: "http://coderockr.local/api/v1"
});

export default api;