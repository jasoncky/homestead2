---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://homestead.app/project1/public/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_bd2777b2132db6c9cf93e928b5b5e44d -->
## api/v1/permissions
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/permissions`


<!-- END_bd2777b2132db6c9cf93e928b5b5e44d -->

<!-- START_defb597dbd6eb21dee1f472ef6340873 -->
## api/v1/permissions
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/permissions`


<!-- END_defb597dbd6eb21dee1f472ef6340873 -->

<!-- START_2cbf87c71ec8fd9634996f224a875400 -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/permissions/{permission}`


<!-- END_2cbf87c71ec8fd9634996f224a875400 -->

<!-- START_102bcc89441658cf73bc3c85f82009fe -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/permissions/{permission}`

`PATCH api/v1/permissions/{permission}`


<!-- END_102bcc89441658cf73bc3c85f82009fe -->

<!-- START_a76ff06df82f5e7b38639608624548fe -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/permissions/{permission}`


<!-- END_a76ff06df82f5e7b38639608624548fe -->

<!-- START_d2f16357cb4ed36dbb0e9529ea4a460c -->
## api/v1/roles
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles`


<!-- END_d2f16357cb4ed36dbb0e9529ea4a460c -->

<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## api/v1/roles
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/roles`


<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_ba05db58d706b9f94944b1ab79e1e4a2 -->
## api/v1/roles/{role}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles/{role}`


<!-- END_ba05db58d706b9f94944b1ab79e1e4a2 -->

<!-- START_81ac9047f8db2b92092c5a7f13e5d28d -->
## api/v1/roles/{role}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/roles/{role}`

`PATCH api/v1/roles/{role}`


<!-- END_81ac9047f8db2b92092c5a7f13e5d28d -->

<!-- START_04c524fc2f0ea8c793406426144b4c71 -->
## api/v1/roles/{role}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/roles/{role}`


<!-- END_04c524fc2f0ea8c793406426144b4c71 -->

<!-- START_1aff981da377ba9a1bbc56ff8efaec0d -->
## api/v1/users
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users`


<!-- END_1aff981da377ba9a1bbc56ff8efaec0d -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## api/v1/users
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/users`


<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_cedc85e856362e0e3b46f5dcd9f8f5d0 -->
## api/v1/users/{user}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users/{user}`


<!-- END_cedc85e856362e0e3b46f5dcd9f8f5d0 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## api/v1/users/{user}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`


<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## api/v1/users/{user}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->

<!-- START_c4ee5bf1595b3eb79cab3784ae88aa9b -->
## api/v1/product-categories/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/product-categories/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-categories/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/product-categories/media`


<!-- END_c4ee5bf1595b3eb79cab3784ae88aa9b -->

<!-- START_e20efd98e7b754013c7dc9014cb4b9a9 -->
## api/v1/product-categories
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/product-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/product-categories`


<!-- END_e20efd98e7b754013c7dc9014cb4b9a9 -->

<!-- START_6b2771d805e79b9d5cacfa0754f86548 -->
## api/v1/product-categories
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/product-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/product-categories`


<!-- END_6b2771d805e79b9d5cacfa0754f86548 -->

<!-- START_a6301ad62346f2cfd829291ab47923be -->
## api/v1/product-categories/{product_category}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/product-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/product-categories/{product_category}`


<!-- END_a6301ad62346f2cfd829291ab47923be -->

<!-- START_1853578b4b4f931a614c51daabdf0de9 -->
## api/v1/product-categories/{product_category}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/product-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/product-categories/{product_category}`

`PATCH api/v1/product-categories/{product_category}`


<!-- END_1853578b4b4f931a614c51daabdf0de9 -->

<!-- START_7b2ae13b23366371fb2295a612ed2416 -->
## api/v1/product-categories/{product_category}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/product-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/product-categories/{product_category}`


<!-- END_7b2ae13b23366371fb2295a612ed2416 -->

<!-- START_60da490186ad232abc082d53c0abf372 -->
## api/v1/product-tags
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/product-tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/product-tags`


<!-- END_60da490186ad232abc082d53c0abf372 -->

<!-- START_01813a3b2fce553c67ebfebe7aad5cae -->
## api/v1/product-tags
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/product-tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/product-tags`


<!-- END_01813a3b2fce553c67ebfebe7aad5cae -->

<!-- START_ad473896f1e7efb08c13494938520400 -->
## api/v1/product-tags/{product_tag}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/product-tags/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-tags/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/product-tags/{product_tag}`


<!-- END_ad473896f1e7efb08c13494938520400 -->

<!-- START_5bf1a6aa58b109222163b551a2642214 -->
## api/v1/product-tags/{product_tag}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/product-tags/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-tags/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/product-tags/{product_tag}`

`PATCH api/v1/product-tags/{product_tag}`


<!-- END_5bf1a6aa58b109222163b551a2642214 -->

<!-- START_ae29a98259df00c5f6c8b669c3101597 -->
## api/v1/product-tags/{product_tag}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/product-tags/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/product-tags/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/product-tags/{product_tag}`


<!-- END_ae29a98259df00c5f6c8b669c3101597 -->

<!-- START_f880475acd91536881b30bc9d7b6cc9e -->
## api/v1/products/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/products/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/products/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/products/media`


<!-- END_f880475acd91536881b30bc9d7b6cc9e -->

<!-- START_4157e0edf1bceccf85f04a2d1851670c -->
## api/v1/products
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/products`


<!-- END_4157e0edf1bceccf85f04a2d1851670c -->

<!-- START_c5a77561baaaf96156fa4f456281b25f -->
## api/v1/products
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/products`


<!-- END_c5a77561baaaf96156fa4f456281b25f -->

<!-- START_65e137d14741894b7db93dbf8a2849bf -->
## api/v1/products/{product}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/products/{product}`


<!-- END_65e137d14741894b7db93dbf8a2849bf -->

<!-- START_c7a6a2912490841bc7c990bdba4945c7 -->
## api/v1/products/{product}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/products/{product}`

`PATCH api/v1/products/{product}`


<!-- END_c7a6a2912490841bc7c990bdba4945c7 -->

<!-- START_8170e43979dbc7d681c58185ab9efbac -->
## api/v1/products/{product}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/products/{product}`


<!-- END_8170e43979dbc7d681c58185ab9efbac -->

<!-- START_c352930d7e7ee88c78fabaacfffba9b4 -->
## api/v1/user-alerts
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/user-alerts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/user-alerts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user-alerts`


<!-- END_c352930d7e7ee88c78fabaacfffba9b4 -->

<!-- START_3dc420dfedabc974dabc2212885f1ea6 -->
## api/v1/user-alerts
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/user-alerts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/user-alerts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user-alerts`


<!-- END_3dc420dfedabc974dabc2212885f1ea6 -->

<!-- START_741bfb49a9b4d4c899a0b6edca477eea -->
## api/v1/user-alerts/{user_alert}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/user-alerts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user-alerts/{user_alert}`


<!-- END_741bfb49a9b4d4c899a0b6edca477eea -->

<!-- START_b2880deb692e339f048efc604663a107 -->
## api/v1/user-alerts/{user_alert}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/user-alerts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/user-alerts/{user_alert}`

`PATCH api/v1/user-alerts/{user_alert}`


<!-- END_b2880deb692e339f048efc604663a107 -->

<!-- START_078e2c5e2c504ed9dde4bd9fa516567a -->
## api/v1/user-alerts/{user_alert}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/user-alerts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/user-alerts/{user_alert}`


<!-- END_078e2c5e2c504ed9dde4bd9fa516567a -->

<!-- START_9c9fa65f9a287d3c60b4d2a602b09fba -->
## api/v1/events
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/events`


<!-- END_9c9fa65f9a287d3c60b4d2a602b09fba -->

<!-- START_40b2dca13b49082417bca22e110bb0d1 -->
## api/v1/events
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/events`


<!-- END_40b2dca13b49082417bca22e110bb0d1 -->

<!-- START_5ef76455a5ba386cb87a1dc2f78adc4b -->
## api/v1/events/{event}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/events/{event}`


<!-- END_5ef76455a5ba386cb87a1dc2f78adc4b -->

<!-- START_a7d1daec0d745b4205a48e97a2c75a82 -->
## api/v1/events/{event}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/events/{event}`

`PATCH api/v1/events/{event}`


<!-- END_a7d1daec0d745b4205a48e97a2c75a82 -->

<!-- START_6f004e557b115c6d4cc94d1ef7352907 -->
## api/v1/events/{event}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/events/{event}`


<!-- END_6f004e557b115c6d4cc94d1ef7352907 -->

<!-- START_4cb34febd82c73f9ac652dbe8060e982 -->
## api/v1/badges/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/badges/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/badges/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/badges/media`


<!-- END_4cb34febd82c73f9ac652dbe8060e982 -->

<!-- START_80e1b4e347513e35f11d1d8b7423cc86 -->
## api/v1/badges
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/badges" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/badges"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/badges`


<!-- END_80e1b4e347513e35f11d1d8b7423cc86 -->

<!-- START_44b22205c4f461d9fd5c29774369c8f7 -->
## api/v1/badges
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/badges" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/badges"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/badges`


<!-- END_44b22205c4f461d9fd5c29774369c8f7 -->

<!-- START_41a261974e2ebd1a3f89a3eb6cd783ad -->
## api/v1/badges/{badge}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/badges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/badges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/badges/{badge}`


<!-- END_41a261974e2ebd1a3f89a3eb6cd783ad -->

<!-- START_9e805553a57ec6e59f52ca06ce1201bf -->
## api/v1/badges/{badge}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/badges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/badges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/badges/{badge}`

`PATCH api/v1/badges/{badge}`


<!-- END_9e805553a57ec6e59f52ca06ce1201bf -->

<!-- START_7c79c97a3b4812426cd57b7e7ece0515 -->
## api/v1/badges/{badge}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/badges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/badges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/badges/{badge}`


<!-- END_7c79c97a3b4812426cd57b7e7ece0515 -->

<!-- START_90cbc515539852918e88ce485b65e71b -->
## api/v1/employees/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/employees/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/employees/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/employees/media`


<!-- END_90cbc515539852918e88ce485b65e71b -->

<!-- START_c3b1501f26d96b9bd4056f1aee29bb63 -->
## api/v1/employees
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/employees`


<!-- END_c3b1501f26d96b9bd4056f1aee29bb63 -->

<!-- START_76b5bb081b7655196b60780d41943e4e -->
## api/v1/employees
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/employees`


<!-- END_76b5bb081b7655196b60780d41943e4e -->

<!-- START_40d24749c533a86db92feafd66d0800d -->
## api/v1/employees/{employee}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/employees/{employee}`


<!-- END_40d24749c533a86db92feafd66d0800d -->

<!-- START_cd5d44cbadeaff4191f854a8d3a69147 -->
## api/v1/employees/{employee}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/employees/{employee}`

`PATCH api/v1/employees/{employee}`


<!-- END_cd5d44cbadeaff4191f854a8d3a69147 -->

<!-- START_68f545670c93a37a8b8428e7151a1174 -->
## api/v1/employees/{employee}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/employees/{employee}`


<!-- END_68f545670c93a37a8b8428e7151a1174 -->

<!-- START_25bf4092f5e200124a149897733aac34 -->
## api/v1/orders
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/orders`


<!-- END_25bf4092f5e200124a149897733aac34 -->

<!-- START_c79cb2035f69ac8078c2cec9fc2fab4a -->
## api/v1/orders
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/orders`


<!-- END_c79cb2035f69ac8078c2cec9fc2fab4a -->

<!-- START_b4bbc4b1b4c4ddc2effe9e5e2475dd8d -->
## api/v1/orders/{order}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/orders/{order}`


<!-- END_b4bbc4b1b4c4ddc2effe9e5e2475dd8d -->

<!-- START_2e6d997181b1c50b2b94eaa14b66f016 -->
## api/v1/orders/{order}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/orders/{order}`

`PATCH api/v1/orders/{order}`


<!-- END_2e6d997181b1c50b2b94eaa14b66f016 -->

<!-- START_f34ad9d71f18dd67576cc6db60268192 -->
## api/v1/orders/{order}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/orders/{order}`


<!-- END_f34ad9d71f18dd67576cc6db60268192 -->

<!-- START_e91b0af0278029e1f6c103542135b6be -->
## api/v1/transactions
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/transactions`


<!-- END_e91b0af0278029e1f6c103542135b6be -->

<!-- START_739dd7a62441def2c98078f39bb39e8f -->
## api/v1/transactions
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/transactions`


<!-- END_739dd7a62441def2c98078f39bb39e8f -->

<!-- START_1faf22f0c5b40c4c013a1186557c7f00 -->
## api/v1/transactions/{transaction}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/transactions/{transaction}`


<!-- END_1faf22f0c5b40c4c013a1186557c7f00 -->

<!-- START_37f2399c6d5a4924b49e1f325b010fb6 -->
## api/v1/transactions/{transaction}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/transactions/{transaction}`

`PATCH api/v1/transactions/{transaction}`


<!-- END_37f2399c6d5a4924b49e1f325b010fb6 -->

<!-- START_e6979628fb538071fb057b854b0f926e -->
## api/v1/transactions/{transaction}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/transactions/{transaction}`


<!-- END_e6979628fb538071fb057b854b0f926e -->

<!-- START_117f569888b58a6ab5c714bb30c00ed4 -->
## api/v1/members/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/members/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/members/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/members/media`


<!-- END_117f569888b58a6ab5c714bb30c00ed4 -->

<!-- START_93652cc886b6606148cd67f1719bdc17 -->
## api/v1/members
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/members"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/members`


<!-- END_93652cc886b6606148cd67f1719bdc17 -->

<!-- START_0cfc7c9960957e4f295140b91b211062 -->
## api/v1/members
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/api/v1/members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/members"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/members`


<!-- END_0cfc7c9960957e4f295140b91b211062 -->

<!-- START_96207d40e79ed11180ddc90fb54ddcf0 -->
## api/v1/members/{member}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/api/v1/members/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/members/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/members/{member}`


<!-- END_96207d40e79ed11180ddc90fb54ddcf0 -->

<!-- START_e2a57764f562113d9b43d407314e2033 -->
## api/v1/members/{member}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/api/v1/members/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/members/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/members/{member}`

`PATCH api/v1/members/{member}`


<!-- END_e2a57764f562113d9b43d407314e2033 -->

<!-- START_466bdfe0f4e034aa5d61038dd1176fb7 -->
## api/v1/members/{member}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/api/v1/members/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/api/v1/members/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/members/{member}`


<!-- END_466bdfe0f4e034aa5d61038dd1176fb7 -->

<!-- START_3340c681e1d077cb3238cfcd9aad8f90 -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET /`

`POST /`

`PUT /`

`PATCH /`

`DELETE /`

`OPTIONS /`


<!-- END_3340c681e1d077cb3238cfcd9aad8f90 -->

<!-- START_44728fef9b7fb68d882c31383f158464 -->
## verify/resend
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/verify/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/verify/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET verify/resend`


<!-- END_44728fef9b7fb68d882c31383f158464 -->

<!-- START_c14da7cf06d66f68afef2fe4e71c0595 -->
## verify
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET verify`


<!-- END_c14da7cf06d66f68afef2fe4e71c0595 -->

<!-- START_04458a45db899ac5c72cc232df404ea6 -->
## verify
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST verify`


<!-- END_04458a45db899ac5c72cc232df404ea6 -->

<!-- START_e4f6df3bcd40fa24234e1ebd80fe779a -->
## admin/get_by_country
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/get_by_country" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/get_by_country"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "html": "<option value=\"\">Please select<\/option>"
}
```

### HTTP Request
`GET admin/get_by_country`


<!-- END_e4f6df3bcd40fa24234e1ebd80fe779a -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_0c28b96c8ce475b11b5baa53301eaf95 -->
## Create a redirect method to facebook api.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/redirect/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/redirect/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET redirect/{driver}`


<!-- END_0c28b96c8ce475b11b5baa53301eaf95 -->

<!-- START_eaacc500b4ebaee18b0910cc4b26b103 -->
## Return a callback method from facebook api.

> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/callback/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/callback/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET callback/{driver}`


<!-- END_eaacc500b4ebaee18b0910cc4b26b103 -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## register
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## register
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_6f60e6e9c50a4e1928dbedae2d09e182 -->
## pricing
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/pricing" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/pricing"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET pricing`


<!-- END_6f60e6e9c50a4e1928dbedae2d09e182 -->

<!-- START_d07f539c53ac3523d04b35efb62b0c13 -->
## pricingselect/{planid}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/pricingselect/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/pricingselect/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET pricingselect/{planid}`


<!-- END_d07f539c53ac3523d04b35efb62b0c13 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_b6d160cd7627e3f014cdd0952c7e2166 -->
## admin/user-alerts/read
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/user-alerts/read" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/read"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/read`


<!-- END_b6d160cd7627e3f014cdd0952c7e2166 -->

<!-- START_8f583347cc741210524d7e2829645ea5 -->
## admin/permissions/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/permissions/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/permissions/destroy`


<!-- END_8f583347cc741210524d7e2829645ea5 -->

<!-- START_507ea499e1f258d23592f36d68e679c8 -->
## admin/permissions
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions`


<!-- END_507ea499e1f258d23592f36d68e679c8 -->

<!-- START_8af39b8b8467d71aafdf675eab809e47 -->
## admin/permissions/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/permissions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions/create`


<!-- END_8af39b8b8467d71aafdf675eab809e47 -->

<!-- START_f1b0f0143b42a05f7de260e9489a48a8 -->
## admin/permissions
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/permissions`


<!-- END_f1b0f0143b42a05f7de260e9489a48a8 -->

<!-- START_52941ce4d55aac10ab700af19c6cf7fd -->
## admin/permissions/{permission}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions/{permission}`


<!-- END_52941ce4d55aac10ab700af19c6cf7fd -->

<!-- START_263860a5fe135afe0dfb6ece84279f62 -->
## admin/permissions/{permission}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/permissions/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/permissions/{permission}/edit`


<!-- END_263860a5fe135afe0dfb6ece84279f62 -->

<!-- START_84a298099551f7e3b7a4167dbb77f79c -->
## admin/permissions/{permission}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/permissions/{permission}`

`PATCH admin/permissions/{permission}`


<!-- END_84a298099551f7e3b7a4167dbb77f79c -->

<!-- START_26cd27653b91a7f60ca8666929159078 -->
## admin/permissions/{permission}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/permissions/{permission}`


<!-- END_26cd27653b91a7f60ca8666929159078 -->

<!-- START_9a3494b330f2468d48a283465528dd7d -->
## admin/roles/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/roles/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/roles/destroy`


<!-- END_9a3494b330f2468d48a283465528dd7d -->

<!-- START_879622c0ac94a4a0f4d364d46a42bc7e -->
## admin/roles
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles`


<!-- END_879622c0ac94a4a0f4d364d46a42bc7e -->

<!-- START_d29246d3a43660bb5210bf9aff91c85a -->
## admin/roles/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles/create`


<!-- END_d29246d3a43660bb5210bf9aff91c85a -->

<!-- START_9117e54780cf55c5071dfb91b33aaef6 -->
## admin/roles
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/roles`


<!-- END_9117e54780cf55c5071dfb91b33aaef6 -->

<!-- START_13b678fa4fec2b2a37ef8510c152dc44 -->
## admin/roles/{role}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles/{role}`


<!-- END_13b678fa4fec2b2a37ef8510c152dc44 -->

<!-- START_beee0bc2c2bf5945907dc7735ae5abfc -->
## admin/roles/{role}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/roles/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/roles/{role}/edit`


<!-- END_beee0bc2c2bf5945907dc7735ae5abfc -->

<!-- START_c7dcda79da31b26bc24750dc109d9724 -->
## admin/roles/{role}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/roles/{role}`

`PATCH admin/roles/{role}`


<!-- END_c7dcda79da31b26bc24750dc109d9724 -->

<!-- START_bf3def166f3885500f81b51b4c2bd978 -->
## admin/roles/{role}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/roles/{role}`


<!-- END_bf3def166f3885500f81b51b4c2bd978 -->

<!-- START_638699da87953aa0482969b25e4fc4c6 -->
## admin/users/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/users/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/destroy`


<!-- END_638699da87953aa0482969b25e4fc4c6 -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## admin/users
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_5480f74e868e50a30ac924242a423503 -->
## admin/users/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/create`


<!-- END_5480f74e868e50a30ac924242a423503 -->

<!-- START_84cdb3581c8df106c62233f1ebb35d8b -->
## admin/users
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/users`


<!-- END_84cdb3581c8df106c62233f1ebb35d8b -->

<!-- START_efce1b78e6391078c4024f200af60be8 -->
## admin/users/{user}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/{user}`


<!-- END_efce1b78e6391078c4024f200af60be8 -->

<!-- START_f8b3cec767336a1c2280a2a3173678d9 -->
## admin/users/{user}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/{user}/edit`


<!-- END_f8b3cec767336a1c2280a2a3173678d9 -->

<!-- START_d7f417f614d8614811f624203f4e63cd -->
## admin/users/{user}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/users/{user}`

`PATCH admin/users/{user}`


<!-- END_d7f417f614d8614811f624203f4e63cd -->

<!-- START_d5165e9382f90b24649e6ea2a27ea85d -->
## admin/users/{user}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{user}`


<!-- END_d5165e9382f90b24649e6ea2a27ea85d -->

<!-- START_c8f56f09b9c68cf18dd0fd5bd26ad161 -->
## admin/product-categories/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/product-categories/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product-categories/destroy`


<!-- END_c8f56f09b9c68cf18dd0fd5bd26ad161 -->

<!-- START_efda68eee5881651477c8491a309a64f -->
## admin/product-categories/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/product-categories/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product-categories/media`


<!-- END_efda68eee5881651477c8491a309a64f -->

<!-- START_46b9d3d96200e3a0686bd84f37e4f863 -->
## admin/product-categories
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-categories`


<!-- END_46b9d3d96200e3a0686bd84f37e4f863 -->

<!-- START_01a7852c28616871a64f1b67521445d5 -->
## admin/product-categories/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-categories/create`


<!-- END_01a7852c28616871a64f1b67521445d5 -->

<!-- START_978651a253049d39e793de2d65e59bd2 -->
## admin/product-categories
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/product-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product-categories`


<!-- END_978651a253049d39e793de2d65e59bd2 -->

<!-- START_36eddabab6bd04fbb2c5f993ad11f3ae -->
## admin/product-categories/{product_category}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-categories/{product_category}`


<!-- END_36eddabab6bd04fbb2c5f993ad11f3ae -->

<!-- START_26aa2dd8a490a0319f34b75f7333ad21 -->
## admin/product-categories/{product_category}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-categories/{product_category}/edit`


<!-- END_26aa2dd8a490a0319f34b75f7333ad21 -->

<!-- START_7bb7b7407c1d6f57dc2c051d6a2cb2e9 -->
## admin/product-categories/{product_category}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/product-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/product-categories/{product_category}`

`PATCH admin/product-categories/{product_category}`


<!-- END_7bb7b7407c1d6f57dc2c051d6a2cb2e9 -->

<!-- START_505059be0c202c9a037ebecc6c9f4451 -->
## admin/product-categories/{product_category}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/product-categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product-categories/{product_category}`


<!-- END_505059be0c202c9a037ebecc6c9f4451 -->

<!-- START_17b84c6056fdb9bf2a93f8f8d1a1d19c -->
## admin/product-tags/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/product-tags/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product-tags/destroy`


<!-- END_17b84c6056fdb9bf2a93f8f8d1a1d19c -->

<!-- START_aa21e93c0c1304ffc9df0c056b245466 -->
## admin/product-tags
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-tags`


<!-- END_aa21e93c0c1304ffc9df0c056b245466 -->

<!-- START_6633c215f44629da24247173fe15aa3b -->
## admin/product-tags/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-tags/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-tags/create`


<!-- END_6633c215f44629da24247173fe15aa3b -->

<!-- START_369d52c728a9723155b16cc4e56923dd -->
## admin/product-tags
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/product-tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product-tags`


<!-- END_369d52c728a9723155b16cc4e56923dd -->

<!-- START_e8f98c5cdf1cfc7eacfd8b899d6209a7 -->
## admin/product-tags/{product_tag}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-tags/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-tags/{product_tag}`


<!-- END_e8f98c5cdf1cfc7eacfd8b899d6209a7 -->

<!-- START_bd058ec6e763101212e5859e85ce3653 -->
## admin/product-tags/{product_tag}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/product-tags/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product-tags/{product_tag}/edit`


<!-- END_bd058ec6e763101212e5859e85ce3653 -->

<!-- START_bcea5689a42ef94db7526748b78fa52b -->
## admin/product-tags/{product_tag}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/product-tags/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/product-tags/{product_tag}`

`PATCH admin/product-tags/{product_tag}`


<!-- END_bcea5689a42ef94db7526748b78fa52b -->

<!-- START_e5508244dbd09fcfc08a8e63545b7303 -->
## admin/product-tags/{product_tag}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/product-tags/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/product-tags/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product-tags/{product_tag}`


<!-- END_e5508244dbd09fcfc08a8e63545b7303 -->

<!-- START_472e84fa20d6925b808c3f78f32337c5 -->
## admin/products/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/products/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/products/destroy`


<!-- END_472e84fa20d6925b808c3f78f32337c5 -->

<!-- START_b922aef38cb107dad6163ea6d496e946 -->
## admin/products/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/products/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/products/media`


<!-- END_b922aef38cb107dad6163ea6d496e946 -->

<!-- START_3454863585da885781d52be92022f9c3 -->
## admin/products
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products`


<!-- END_3454863585da885781d52be92022f9c3 -->

<!-- START_ed713b61191bdebf2b0db1797a53ccd7 -->
## admin/products/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/products/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products/create`


<!-- END_ed713b61191bdebf2b0db1797a53ccd7 -->

<!-- START_075ee910ac89ee753cb942257accd01a -->
## admin/products
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/products`


<!-- END_075ee910ac89ee753cb942257accd01a -->

<!-- START_6a8c3144dc28b1c9ab73fb0d68568989 -->
## admin/products/{product}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products/{product}`


<!-- END_6a8c3144dc28b1c9ab73fb0d68568989 -->

<!-- START_00f5a0dd610bc119d9ff3c226319fa2a -->
## admin/products/{product}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/products/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products/{product}/edit`


<!-- END_00f5a0dd610bc119d9ff3c226319fa2a -->

<!-- START_6380e3862cabbd94ac6032029b0382ea -->
## admin/products/{product}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/products/{product}`

`PATCH admin/products/{product}`


<!-- END_6380e3862cabbd94ac6032029b0382ea -->

<!-- START_6016a2a97a0b96706495e53140d8e2a7 -->
## admin/products/{product}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/products/{product}`


<!-- END_6016a2a97a0b96706495e53140d8e2a7 -->

<!-- START_53f89f8c3963e9c3602d95b9ad4d3dee -->
## admin/user-alerts/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/user-alerts/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user-alerts/destroy`


<!-- END_53f89f8c3963e9c3602d95b9ad4d3dee -->

<!-- START_c4322b0d4bee989af5882b6a516acada -->
## admin/user-alerts
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/user-alerts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts`


<!-- END_c4322b0d4bee989af5882b6a516acada -->

<!-- START_84e356ea0832422c3edb84563ebdc0ab -->
## admin/user-alerts/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/user-alerts/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/create`


<!-- END_84e356ea0832422c3edb84563ebdc0ab -->

<!-- START_3cfff5bc99c00727709980ee00dbe942 -->
## admin/user-alerts
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/user-alerts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user-alerts`


<!-- END_3cfff5bc99c00727709980ee00dbe942 -->

<!-- START_62464daaa614a91fdeb3685c5d090e98 -->
## admin/user-alerts/{user_alert}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/{user_alert}`


<!-- END_62464daaa614a91fdeb3685c5d090e98 -->

<!-- START_2da61e631f043db06098e163198de202 -->
## admin/user-alerts/{user_alert}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/user-alerts/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user-alerts/{user_alert}/edit`


<!-- END_2da61e631f043db06098e163198de202 -->

<!-- START_8bff9436555a50f35168b5e43c996cbf -->
## admin/user-alerts/{user_alert}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user-alerts/{user_alert}`

`PATCH admin/user-alerts/{user_alert}`


<!-- END_8bff9436555a50f35168b5e43c996cbf -->

<!-- START_789a8e9ad4c1fa45999f9a56f0236a7e -->
## admin/user-alerts/{user_alert}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/user-alerts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/user-alerts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user-alerts/{user_alert}`


<!-- END_789a8e9ad4c1fa45999f9a56f0236a7e -->

<!-- START_b405b4aca975506618dffd50c38a471f -->
## admin/events/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/events/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/events/destroy`


<!-- END_b405b4aca975506618dffd50c38a471f -->

<!-- START_5a2c2b2a7d0664e0be3af7a1efb24ace -->
## admin/events
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/events`


<!-- END_5a2c2b2a7d0664e0be3af7a1efb24ace -->

<!-- START_eceeee62f7792c3f49c89123e82bb181 -->
## admin/events/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/events/create`


<!-- END_eceeee62f7792c3f49c89123e82bb181 -->

<!-- START_3649aa6acc8ccc97bfea0e38cc15dd83 -->
## admin/events
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/events`


<!-- END_3649aa6acc8ccc97bfea0e38cc15dd83 -->

<!-- START_d9fe80b1c68360323d232b11d6b3c840 -->
## admin/events/{event}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/events/{event}`


<!-- END_d9fe80b1c68360323d232b11d6b3c840 -->

<!-- START_93dc4ae4c13811b6f2073ce819704c19 -->
## admin/events/{event}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/events/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/events/{event}/edit`


<!-- END_93dc4ae4c13811b6f2073ce819704c19 -->

<!-- START_12a590842939d9e4749f35803cc7ba56 -->
## admin/events/{event}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/events/{event}`

`PATCH admin/events/{event}`


<!-- END_12a590842939d9e4749f35803cc7ba56 -->

<!-- START_9fd37640c956939a61d82c171b68999b -->
## admin/events/{event}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/events/{event}`


<!-- END_9fd37640c956939a61d82c171b68999b -->

<!-- START_95e7cd677c368381a6819e7b09bdb0f7 -->
## admin/events/ajaxUpdate
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/events/ajaxUpdate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/events/ajaxUpdate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/events/ajaxUpdate`


<!-- END_95e7cd677c368381a6819e7b09bdb0f7 -->

<!-- START_9b548bda2896ed90908117e77a37743e -->
## admin/system-calendar
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/system-calendar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/system-calendar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/system-calendar`


<!-- END_9b548bda2896ed90908117e77a37743e -->

<!-- START_a39bfa0f835e1e5f900d95377a787916 -->
## admin/chart
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/chart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/chart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/chart`


<!-- END_a39bfa0f835e1e5f900d95377a787916 -->

<!-- START_bc030bb14676abb6053c6391af073fbb -->
## admin/badges/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/badges/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/badges/destroy`


<!-- END_bc030bb14676abb6053c6391af073fbb -->

<!-- START_95182d2bec961e61765482374b6decd6 -->
## admin/badges/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/badges/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/badges/media`


<!-- END_95182d2bec961e61765482374b6decd6 -->

<!-- START_22b7bee5579ef12fe7a412d98c12ad9f -->
## admin/badges/ckmedia
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/badges/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/ckmedia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/badges/ckmedia`


<!-- END_22b7bee5579ef12fe7a412d98c12ad9f -->

<!-- START_14c1e99dcb718375017e9ef12e1038ce -->
## admin/badges
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/badges" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/badges`


<!-- END_14c1e99dcb718375017e9ef12e1038ce -->

<!-- START_cb4dc121341d5ef838fc91b1b21cfeb7 -->
## admin/badges/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/badges/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/badges/create`


<!-- END_cb4dc121341d5ef838fc91b1b21cfeb7 -->

<!-- START_9132c9285bdb4939896803c5fec94161 -->
## admin/badges
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/badges" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/badges`


<!-- END_9132c9285bdb4939896803c5fec94161 -->

<!-- START_94acb520feb4236267f2cc34d4e37d13 -->
## admin/badges/{badge}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/badges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/badges/{badge}`


<!-- END_94acb520feb4236267f2cc34d4e37d13 -->

<!-- START_6b08c937df637380df20f15a32244b64 -->
## admin/badges/{badge}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/badges/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/badges/{badge}/edit`


<!-- END_6b08c937df637380df20f15a32244b64 -->

<!-- START_84b2bd6cd763341a812c782354f62c8e -->
## admin/badges/{badge}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/badges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/badges/{badge}`

`PATCH admin/badges/{badge}`


<!-- END_84b2bd6cd763341a812c782354f62c8e -->

<!-- START_e7f3fde9e80daa005860a3693829f0b3 -->
## admin/badges/{badge}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/badges/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/badges/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/badges/{badge}`


<!-- END_e7f3fde9e80daa005860a3693829f0b3 -->

<!-- START_69c194c8d731bb1db580036b3a17e1bb -->
## admin/employees/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/employees/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/employees/destroy`


<!-- END_69c194c8d731bb1db580036b3a17e1bb -->

<!-- START_4d33069c917e1ff8f363fb0ddbeb2ea6 -->
## admin/employees/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/employees/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/employees/media`


<!-- END_4d33069c917e1ff8f363fb0ddbeb2ea6 -->

<!-- START_910dc812c8e424a01440e7ca6208067b -->
## admin/employees/ckmedia
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/employees/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/ckmedia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/employees/ckmedia`


<!-- END_910dc812c8e424a01440e7ca6208067b -->

<!-- START_0045614f2ac9458326ebd6a9cbb4ac8d -->
## admin/employees
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees`


<!-- END_0045614f2ac9458326ebd6a9cbb4ac8d -->

<!-- START_4f7786116449f3385b956430be310c33 -->
## admin/employees/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/employees/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/create`


<!-- END_4f7786116449f3385b956430be310c33 -->

<!-- START_4b55114ebbf85f1bdce716d4d8dee740 -->
## admin/employees
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/employees`


<!-- END_4b55114ebbf85f1bdce716d4d8dee740 -->

<!-- START_5d552cddf1d8a8ebd0a9faf482811db4 -->
## admin/employees/{employee}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/{employee}`


<!-- END_5d552cddf1d8a8ebd0a9faf482811db4 -->

<!-- START_575c0d4cf86eb3f55f0e09306188cf40 -->
## admin/employees/{employee}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/employees/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/{employee}/edit`


<!-- END_575c0d4cf86eb3f55f0e09306188cf40 -->

<!-- START_a0f7ded4c335e760b839753dd09868ed -->
## admin/employees/{employee}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/employees/{employee}`

`PATCH admin/employees/{employee}`


<!-- END_a0f7ded4c335e760b839753dd09868ed -->

<!-- START_882f9a965b67fe8d0d33c2da1a727ad1 -->
## admin/employees/{employee}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/employees/{employee}`


<!-- END_882f9a965b67fe8d0d33c2da1a727ad1 -->

<!-- START_b485a3cdee57d15fceb76734fb42d32b -->
## admin/orders/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/orders/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/orders/destroy`


<!-- END_b485a3cdee57d15fceb76734fb42d32b -->

<!-- START_ef74fc88219ad75b0acc28af7b662090 -->
## admin/orders
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/orders`


<!-- END_ef74fc88219ad75b0acc28af7b662090 -->

<!-- START_86d42efe50fecfeaa256fd0df15fa59f -->
## admin/orders/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/orders/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/orders/create`


<!-- END_86d42efe50fecfeaa256fd0df15fa59f -->

<!-- START_bcfc7f86622b0198b5cf2056c3c6cdd7 -->
## admin/orders
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/orders`


<!-- END_bcfc7f86622b0198b5cf2056c3c6cdd7 -->

<!-- START_11fc1302fe442e719f73e70c8d67aa39 -->
## admin/orders/{order}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/orders/{order}`


<!-- END_11fc1302fe442e719f73e70c8d67aa39 -->

<!-- START_677a8b5f80e3958022cc16b3b1ef69cd -->
## admin/orders/{order}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/orders/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/orders/{order}/edit`


<!-- END_677a8b5f80e3958022cc16b3b1ef69cd -->

<!-- START_a7a4cccd821013bc4824e61409a84ad7 -->
## admin/orders/{order}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/orders/{order}`

`PATCH admin/orders/{order}`


<!-- END_a7a4cccd821013bc4824e61409a84ad7 -->

<!-- START_57da060bf78add7b67b784403fce47c8 -->
## admin/orders/{order}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/orders/{order}`


<!-- END_57da060bf78add7b67b784403fce47c8 -->

<!-- START_1255c05e105f73d9efaf15bb4896d01f -->
## admin/transactions/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/transactions/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/transactions/destroy`


<!-- END_1255c05e105f73d9efaf15bb4896d01f -->

<!-- START_301824478b0baab50afe0b4d733cddfb -->
## admin/transactions
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transactions`


<!-- END_301824478b0baab50afe0b4d733cddfb -->

<!-- START_6d0dfadbed2aff7acb095b502bb659c3 -->
## admin/transactions/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/transactions/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transactions/create`


<!-- END_6d0dfadbed2aff7acb095b502bb659c3 -->

<!-- START_60a7118f5717c6714626f6546c3bf51b -->
## admin/transactions
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/transactions`


<!-- END_60a7118f5717c6714626f6546c3bf51b -->

<!-- START_f3ff70cec52548ed43357432d31e7dce -->
## admin/transactions/{transaction}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transactions/{transaction}`


<!-- END_f3ff70cec52548ed43357432d31e7dce -->

<!-- START_9b6a4d1f3c65f87f3ebfe62ca9ebcfe7 -->
## admin/transactions/{transaction}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/transactions/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transactions/{transaction}/edit`


<!-- END_9b6a4d1f3c65f87f3ebfe62ca9ebcfe7 -->

<!-- START_9a2ea5da361cbeb3ff63ad4073f28198 -->
## admin/transactions/{transaction}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/transactions/{transaction}`

`PATCH admin/transactions/{transaction}`


<!-- END_9a2ea5da361cbeb3ff63ad4073f28198 -->

<!-- START_e7da5e78fc698a0f1bcb212cb8a9134f -->
## admin/transactions/{transaction}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/transactions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/transactions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/transactions/{transaction}`


<!-- END_e7da5e78fc698a0f1bcb212cb8a9134f -->

<!-- START_93d3061f82534722128679c50c0e76b8 -->
## admin/members/destroy
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/members/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/members/destroy`


<!-- END_93d3061f82534722128679c50c0e76b8 -->

<!-- START_74f35641a3572c2f9d931ec8d0fb6e76 -->
## admin/members/updateStatus
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/members/updateStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/updateStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/members/updateStatus`


<!-- END_74f35641a3572c2f9d931ec8d0fb6e76 -->

<!-- START_d70a4431774a31d4933915a018137086 -->
## admin/members/media
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/members/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/members/media`


<!-- END_d70a4431774a31d4933915a018137086 -->

<!-- START_0aad61ba2cc113bb6876c7d17cfb06fe -->
## admin/members/ckmedia
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/members/ckmedia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/ckmedia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/members/ckmedia`


<!-- END_0aad61ba2cc113bb6876c7d17cfb06fe -->

<!-- START_0320a9ccd34143690599fb2837f2e192 -->
## admin/members
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/members`


<!-- END_0320a9ccd34143690599fb2837f2e192 -->

<!-- START_0b3bc3d3e9b0fbaa970ad701f4f4bc05 -->
## admin/members/create
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/members/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/members/create`


<!-- END_0b3bc3d3e9b0fbaa970ad701f4f4bc05 -->

<!-- START_a7fb84c57c390671db031ec5c5894692 -->
## admin/members
> Example request:

```bash
curl -X POST \
    "https://homestead.app/project1/public/admin/members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/members`


<!-- END_a7fb84c57c390671db031ec5c5894692 -->

<!-- START_858ff8a0b7bba0ed9e48cff95431e6f3 -->
## admin/members/{member}
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/members/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/members/{member}`


<!-- END_858ff8a0b7bba0ed9e48cff95431e6f3 -->

<!-- START_e688dc01ad05dfde21e74bf50d1d4421 -->
## admin/members/{member}/edit
> Example request:

```bash
curl -X GET \
    -G "https://homestead.app/project1/public/admin/members/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/members/{member}/edit`


<!-- END_e688dc01ad05dfde21e74bf50d1d4421 -->

<!-- START_10aaa55fec648c3350dcd5fe7346b83f -->
## admin/members/{member}
> Example request:

```bash
curl -X PUT \
    "https://homestead.app/project1/public/admin/members/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/members/{member}`

`PATCH admin/members/{member}`


<!-- END_10aaa55fec648c3350dcd5fe7346b83f -->

<!-- START_2acd4e042d072ae0e8d9cdf1736f1e56 -->
## admin/members/{member}
> Example request:

```bash
curl -X DELETE \
    "https://homestead.app/project1/public/admin/members/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://homestead.app/project1/public/admin/members/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/members/{member}`


<!-- END_2acd4e042d072ae0e8d9cdf1736f1e56 -->


