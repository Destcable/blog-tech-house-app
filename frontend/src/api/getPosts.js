import axios from "axios";

export default function getPosts() {
    return axios.get('http://housebackend/v1/posts');
}