export default function formatDateToString(inputDate) { 
    const date = new Date(inputDate);
    const day =  date.getUTCDate();
    const month = date.getUTCMonth();
    const year = date.getUTCFullYear();
    return (day + '.' + month + '.' + year);
}