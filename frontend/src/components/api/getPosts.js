import axios from "axios";

export default function getPosts() {
    return axios.get('http://127.0.0.1:8000/api/v1/posts');
}