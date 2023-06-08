
- Вывести список всех  [задач](/api/task)  (GET метод)
- Получить одну [задачу](/api/task/1) по ID и все ее теги (GET метод)
- Добавить новую [задачу](/api/task) (POST метод)
- Вывести список всех [тегов](/api/tag) (GET метод)
- Получить один [тег](/api/tag/1) по ID и все его задачи (GET метод)
- Добавить новый [тег](/api/tag) (POST метод)

add task  example

{
"name": "postman task 1",
"description": "postman",
"tags": [4]
}

add task with two tags example 

{
"name": "postman",
"description": "postman",
"tags": [1,2]
}

add tag example 


{
"name": "new tag postman"
}

tasks example 

{
"data": [
{

"id": 4,
"name": "postman task 4",
"description": "postman",
"date_of_creation": "2023-06-08 13:40:30"
},

{

"id": 3,
"name": "postman task 3",
"description": "postman",
"date_of_creation": "2023-06-08 13:35:14"
},

{

"id": 2,
"name": "postman task 2",
"description": "postman",
"date_of_creation": "2023-06-08 13:35:04"
},

{

"id": 1,
"name": "postman task",
"description": "postman",
"date_of_creation": "2023-06-08 13:34:55"
}
]
}
