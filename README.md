# Routes

- POST: `nodes`

    To create a new node. the request should contain a JSON body

   ```
    {
        "name": "Mohamed",
        "parent_id": 2,
        "type": "developer",
        "programming_language": "JavaScript"
    }
    ```

- GET: `nodes/{id}`

    To get a node with all sub nodes (1 layer)

- PATCH: `nodes/{id}`

    To change the node parent id. the request body should contain 

    ```
    {
        "parent_id": 1
    }
    ```
