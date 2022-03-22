const students = [
    { name: 'Павел', age: 20 },
    { name: 'Иван', age: 20 },
    { name: 'Эдем', age: 20 },
    { name: 'Денис', age: 20 },
    { name: 'Виктория', age: 20 },
    { age: 40 },
]
function createCounter(students, property)
{
    const result =[];
    for (let i=0;i<students.length;i++){
        const prov = students[i];
        if (prov[property]!== undefined) result.push(prov[property]);
    }
    return result;
}
const result = createCounter(students, 'name')

console.log(result)