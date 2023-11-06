import formatDateToString from "../formatDate/formatDateToString";
export default function transformResponsePosts(response) {
    
    response.forEach(item => {
        item.created_at = formatDateToString(item.created_at);
    }); 

    return response;
}