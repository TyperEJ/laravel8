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
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Counseling Profile


<!-- START_ac4cee75b9957dd48cbd8b931f50462b -->
## Store counseling profile

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api-doc/example" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"error","middle_name":"non","last_name":"debitis","used_any_other_names":true,"sex":true,"birth_date":"exercitationem","country":"facere","city":"dolores","state":"est","address_line_1":"nulla","address_line_2":"odio","zip":"ut","mobile_number":"animi","birth_country":"quia","birth_city":"voluptate","lived_in_us_number":18,"lived_outside_us_number":10,"languages":[{"language":"illo","proficiency":"labore"}],"citizenship_status":"et","list_citizenship":[],"parents_marital_status":"et","whom_make_your_permanent_home":"assumenda","parents":[{"type":"consequatur","is_living":true,"deceased_date":"et","first_name":"est","middle_name":"maxime","last_name":"perspiciatis","address_is":"aliquam","country":"nesciunt","state":"sed","address_line_1":"voluptas","address_line_2":"doloribus","zip":"odio","education_level":"id"}],"siblings":[{"first_name":"sit","middle_name":"dignissimos","last_name":"molestiae","education_level":"vel"}],"high_school_name":"assumenda","is_boarding_high_school":true,"is_graduate_from_school":false,"high_school_name_date_started":"dicta","high_school_name_date_ended":"eligendi","graduate_status":[{"status":"qui","reason":"deserunt"}],"other_high_schools":[{"name":"accusantium","date_started":"officiis","date_ended":"totam"}],"why_leave_other_high_school":"repudiandae","colleges":[{"name":"corporis","date_started":"fugit","date_ended":"placeat"}],"graduating_class_size":"id","class_rank":3,"year_courses_scheduling_system":"occaecati","year_courses":[{"title":"omnis","level":"explicabo","schedule":"aut"}],"honors":[{"title":"veritatis","level":[],"level_recognition":[]}],"community_based_organizations":[{"organization_name":"doloribus","mentor_prefix":"esse","mentor_first_name":"repellat","mentor_last_name":"necessitatibus","mentor_email":"unde","mentor_phone":"consequatur"}],"career_interest":"enim","sats":[{"taken_date":"qui","subject":"voluptatem","score":9}],"acts":[{"taken_date":"sit","highest_composite_score":20,"composite_date":"reiciendis","highest_english_score":16,"english_date":"est","highest_math_score":19,"math_date":"totam","highest_reading_score":9,"reading_date":"aut","highest_science_score":6,"science_date":"unde"}],"aps":[{"taken_date":"sit","subject":"aspernatur","score":12}],"ibs":[{"taken_date":"esse","subject":"quas","level":"qui","score":5}],"toefls":[{"total_score":6,"total_score_date":"aut","highest_reading_score":5,"reading_date":"voluptatem","highest_speaking_score":18,"speaking_date":"optio","highest_listening_score":14,"listening_date":"fugiat","highest_writing_score":19,"writing_date":"mollitia"}],"ielts":[{"total_score":16,"total_score_date":"ut","highest_reading_score":13,"reading_date":"quia","highest_speaking_score":15,"speaking_date":"consequatur","highest_listening_score":15,"listening_date":"doloribus","highest_writing_score":12,"writing_date":"itaque"}],"activities":[{"type":"laborum","position_des":"alias","activity_des":"omnis","grade_levels":"ad","participation_time":[],"hours_spent_per_week":17,"hours_spent_per_year":18,"intend_to_participate":false}]}'

```

```javascript
const url = new URL(
    "http://localhost/api-doc/example"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "error",
    "middle_name": "non",
    "last_name": "debitis",
    "used_any_other_names": true,
    "sex": true,
    "birth_date": "exercitationem",
    "country": "facere",
    "city": "dolores",
    "state": "est",
    "address_line_1": "nulla",
    "address_line_2": "odio",
    "zip": "ut",
    "mobile_number": "animi",
    "birth_country": "quia",
    "birth_city": "voluptate",
    "lived_in_us_number": 18,
    "lived_outside_us_number": 10,
    "languages": [
        {
            "language": "illo",
            "proficiency": "labore"
        }
    ],
    "citizenship_status": "et",
    "list_citizenship": [],
    "parents_marital_status": "et",
    "whom_make_your_permanent_home": "assumenda",
    "parents": [
        {
            "type": "consequatur",
            "is_living": true,
            "deceased_date": "et",
            "first_name": "est",
            "middle_name": "maxime",
            "last_name": "perspiciatis",
            "address_is": "aliquam",
            "country": "nesciunt",
            "state": "sed",
            "address_line_1": "voluptas",
            "address_line_2": "doloribus",
            "zip": "odio",
            "education_level": "id"
        }
    ],
    "siblings": [
        {
            "first_name": "sit",
            "middle_name": "dignissimos",
            "last_name": "molestiae",
            "education_level": "vel"
        }
    ],
    "high_school_name": "assumenda",
    "is_boarding_high_school": true,
    "is_graduate_from_school": false,
    "high_school_name_date_started": "dicta",
    "high_school_name_date_ended": "eligendi",
    "graduate_status": [
        {
            "status": "qui",
            "reason": "deserunt"
        }
    ],
    "other_high_schools": [
        {
            "name": "accusantium",
            "date_started": "officiis",
            "date_ended": "totam"
        }
    ],
    "why_leave_other_high_school": "repudiandae",
    "colleges": [
        {
            "name": "corporis",
            "date_started": "fugit",
            "date_ended": "placeat"
        }
    ],
    "graduating_class_size": "id",
    "class_rank": 3,
    "year_courses_scheduling_system": "occaecati",
    "year_courses": [
        {
            "title": "omnis",
            "level": "explicabo",
            "schedule": "aut"
        }
    ],
    "honors": [
        {
            "title": "veritatis",
            "level": [],
            "level_recognition": []
        }
    ],
    "community_based_organizations": [
        {
            "organization_name": "doloribus",
            "mentor_prefix": "esse",
            "mentor_first_name": "repellat",
            "mentor_last_name": "necessitatibus",
            "mentor_email": "unde",
            "mentor_phone": "consequatur"
        }
    ],
    "career_interest": "enim",
    "sats": [
        {
            "taken_date": "qui",
            "subject": "voluptatem",
            "score": 9
        }
    ],
    "acts": [
        {
            "taken_date": "sit",
            "highest_composite_score": 20,
            "composite_date": "reiciendis",
            "highest_english_score": 16,
            "english_date": "est",
            "highest_math_score": 19,
            "math_date": "totam",
            "highest_reading_score": 9,
            "reading_date": "aut",
            "highest_science_score": 6,
            "science_date": "unde"
        }
    ],
    "aps": [
        {
            "taken_date": "sit",
            "subject": "aspernatur",
            "score": 12
        }
    ],
    "ibs": [
        {
            "taken_date": "esse",
            "subject": "quas",
            "level": "qui",
            "score": 5
        }
    ],
    "toefls": [
        {
            "total_score": 6,
            "total_score_date": "aut",
            "highest_reading_score": 5,
            "reading_date": "voluptatem",
            "highest_speaking_score": 18,
            "speaking_date": "optio",
            "highest_listening_score": 14,
            "listening_date": "fugiat",
            "highest_writing_score": 19,
            "writing_date": "mollitia"
        }
    ],
    "ielts": [
        {
            "total_score": 16,
            "total_score_date": "ut",
            "highest_reading_score": 13,
            "reading_date": "quia",
            "highest_speaking_score": 15,
            "speaking_date": "consequatur",
            "highest_listening_score": 15,
            "listening_date": "doloribus",
            "highest_writing_score": 12,
            "writing_date": "itaque"
        }
    ],
    "activities": [
        {
            "type": "laborum",
            "position_des": "alias",
            "activity_des": "omnis",
            "grade_levels": "ad",
            "participation_time": [],
            "hours_spent_per_week": 17,
            "hours_spent_per_year": 18,
            "intend_to_participate": false
        }
    ]
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api-doc/example`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | 
        `middle_name` | string |  optional  | optional
        `last_name` | string |  required  | 
        `used_any_other_names` | boolean |  required  | 
        `sex` | boolean |  required  | 0:male 1:female
        `birth_date` | date |  required  | 
        `country` | string |  required  | 
        `city` | string |  required  | 
        `state` | string |  required  | 
        `address_line_1` | string |  required  | 
        `address_line_2` | string |  optional  | optional
        `zip` | string |  required  | 
        `mobile_number` | string |  required  | 
        `birth_country` | string |  required  | 
        `birth_city` | string |  required  | 
        `lived_in_us_number` | integer |  required  | 
        `lived_outside_us_number` | integer |  required  | 
        `languages.*.language` | string |  required  | 
        `languages.*.proficiency` | string |  required  | 
        `citizenship_status` | string |  required  | 
        `list_citizenship` | array |  required  | 
        `parents_marital_status` | string |  required  | 
        `whom_make_your_permanent_home` | string |  required  | 
        `parents.*.type` | string |  required  | 
        `parents.*.is_living` | boolean |  required  | 
        `parents.*.deceased_date` | date |  required  | 
        `parents.*.first_name` | string |  required  | 
        `parents.*.middle_name` | string |  optional  | optional
        `parents.*.last_name` | string |  required  | 
        `parents.*.address_is` | string |  required  | 
        `parents.*.country` | string |  required  | 
        `parents.*.state` | string |  required  | 
        `parents.*.address_line_1` | string |  required  | 
        `parents.*.address_line_2` | string |  optional  | optional
        `parents.*.zip` | string |  optional  | optional
        `parents.*.education_level` | string |  required  | 
        `siblings.*.first_name` | string |  required  | 
        `siblings.*.middle_name` | string |  optional  | optional
        `siblings.*.last_name` | string |  required  | 
        `siblings.*.education_level` | string |  required  | 
        `high_school_name` | string |  required  | 
        `is_boarding_high_school` | boolean |  required  | 
        `is_graduate_from_school` | boolean |  required  | 
        `high_school_name_date_started` | date |  required  | 
        `high_school_name_date_ended` | date |  required  | 
        `graduate_status.*.status` | string |  required  | 
        `graduate_status.*.reason` | string |  required  | 
        `other_high_schools.*.name` | string |  required  | 
        `other_high_schools.*.date_started` | date |  required  | 
        `other_high_schools.*.date_ended` | date |  required  | 
        `why_leave_other_high_school` | string |  required  | 
        `colleges.*.name` | string |  required  | 
        `colleges.*.date_started` | date |  required  | 
        `colleges.*.date_ended` | date |  required  | 
        `graduating_class_size` | string |  required  | 
        `class_rank` | integer |  required  | 1:weighted 2:unweighted
        `year_courses_scheduling_system` | string |  required  | 
        `year_courses.*.title` | string |  required  | 
        `year_courses.*.level` | string |  optional  | optional
        `year_courses.*.schedule` | string |  required  | 
        `honors.*.title` | string |  required  | 
        `honors.*.level` | array |  optional  | optional
        `honors.*.level_recognition` | array |  optional  | optional
        `community_based_organizations.*.organization_name` | string |  required  | 
        `community_based_organizations.*.mentor_prefix` | string |  optional  | optional
        `community_based_organizations.*.mentor_first_name` | string |  optional  | optional
        `community_based_organizations.*.mentor_last_name` | string |  optional  | optional
        `community_based_organizations.*.mentor_email` | string |  optional  | optional
        `community_based_organizations.*.mentor_phone` | string |  optional  | optional
        `career_interest` | string |  required  | 
        `sats.*.taken_date` | date |  required  | 
        `sats.*.subject` | string |  required  | 
        `sats.*.score` | integer |  optional  | optional
        `acts.*.taken_date` | date |  required  | 
        `acts.*.highest_composite_score` | integer |  required  | 
        `acts.*.composite_date` | date |  required  | 
        `acts.*.highest_english_score` | integer |  required  | 
        `acts.*.english_date` | date |  required  | 
        `acts.*.highest_math_score` | integer |  required  | 
        `acts.*.math_date` | date |  required  | 
        `acts.*.highest_reading_score` | integer |  required  | 
        `acts.*.reading_date` | date |  required  | 
        `acts.*.highest_science_score` | integer |  required  | 
        `acts.*.science_date` | date |  required  | 
        `aps.*.taken_date` | date |  required  | 
        `aps.*.subject` | string |  required  | 
        `aps.*.score` | integer |  optional  | optional
        `ibs.*.taken_date` | date |  required  | 
        `ibs.*.subject` | string |  required  | 
        `ibs.*.level` | string |  required  | 1:high level 0:standard level
        `ibs.*.score` | integer |  optional  | optional
        `toefls.*.total_score` | integer |  required  | 
        `toefls.*.total_score_date` | date |  required  | 
        `toefls.*.highest_reading_score` | integer |  required  | 
        `toefls.*.reading_date` | date |  required  | 
        `toefls.*.highest_speaking_score` | integer |  required  | 
        `toefls.*.speaking_date` | date |  required  | 
        `toefls.*.highest_listening_score` | integer |  required  | 
        `toefls.*.listening_date` | date |  required  | 
        `toefls.*.highest_writing_score` | integer |  required  | 
        `toefls.*.writing_date` | date |  required  | 
        `ielts.*.total_score` | integer |  required  | 
        `ielts.*.total_score_date` | date |  required  | 
        `ielts.*.highest_reading_score` | integer |  required  | 
        `ielts.*.reading_date` | date |  required  | 
        `ielts.*.highest_speaking_score` | integer |  required  | 
        `ielts.*.speaking_date` | date |  required  | 
        `ielts.*.highest_listening_score` | integer |  required  | 
        `ielts.*.listening_date` | date |  required  | 
        `ielts.*.highest_writing_score` | integer |  required  | 
        `ielts.*.writing_date` | date |  required  | 
        `activities.*.type` | string |  required  | 
        `activities.*.position_des` | string |  required  | 
        `activities.*.activity_des` | string |  required  | 
        `activities.*.grade_levels` | string |  required  | 
        `activities.*.participation_time` | array |  required  | 
        `activities.*.hours_spent_per_week` | integer |  required  | 
        `activities.*.hours_spent_per_year` | integer |  required  | 
        `activities.*.intend_to_participate` | boolean |  required  | 
    
<!-- END_ac4cee75b9957dd48cbd8b931f50462b -->

#general


<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
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
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
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

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
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

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
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
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
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
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
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
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
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
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
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

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
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
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_bebeab1cacfefde0ff0fdd3bbbcf2f6f -->
## Bind facebook account to user

> Example request:

```bash
curl -X GET \
    -G "http://localhost/facebook/bind" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/facebook/bind"
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
`GET facebook/bind`


<!-- END_bebeab1cacfefde0ff0fdd3bbbcf2f6f -->

<!-- START_01e3fa7ada689d295e212467fdfc3df7 -->
## Facebook login

> Example request:

```bash
curl -X GET \
    -G "http://localhost/facebook/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/facebook/login"
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
`GET facebook/login`


<!-- END_01e3fa7ada689d295e212467fdfc3df7 -->


