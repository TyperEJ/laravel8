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

Personal Information

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api-doc/example" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"fuga","middle_name":"sed","last_name":"alias","suffix":1,"preferred_name":"exercitationem","used_any_other_names":false,"former_first_name":"iusto","former_middle_name":"eos","former_last_name":"ut","sex":true,"sex_descr":"et","birth_date":"nihil","address":[{"county":"fugit","country_code":14,"country_value":"reiciendis","address_line_1":"qui","address_line_2":"reiciendis","address_line_3":"consequuntur","city":"deleniti","state":8,"state_value":"beatae","zip":"quas"}],"used_mailing_address":false,"mailing_address":[{"county":"itaque","country_code":18,"country_value":"asperiores","address_line_1":"dolorum","address_line_2":"molestias","address_line_3":"voluptatibus","city":"qui","state":1,"state_value":"praesentium","zip":"quidem"}],"is_temporary_mailing_address":false,"temporary_mailing_address_from_date":"quae","temporary_mailing_address_to_date":"odio","preferred_phone":true,"preferred_phone_number":[{"country_code":"id","phone_number":"quo","extension":"unde"}],"used_alternate_phone":false,"alternate_phone_number":[{"country_code":"expedita","phone_number":"magnam","extension":"voluptates"}],"religion":10,"us_armed_forces_status":1,"us_military_anticipated_status":19,"us_military_experience_1_branch":"perferendis","us_military_experience_1_from_month":"fugiat","us_military_experience_1_to_month":"et","us_military_experience_2_branch":"vel","us_military_experience_2_from_month":"qui","us_military_experience_2_to_month":"rem","us_military_experience_3_branch":"qui","us_military_experience_3_from_month":"modi","us_military_experience_3_to_month":"consequatur","is_hispanic_or_latino":false,"hispanic_or_latino_identities":[],"hispanic_or_latino_descr":"enim","other_identities":[],"is_federally_recognized_tribe":true,"tribe":19,"tribal_enrollment_number":"autem","asian_background":[],"asian_descr":"id","african_american_backgrounds":[],"african_american_descr":"iure","native_hawaiian_or_other_pacific_islander_backgrounds":[],"native_hawaiian_or_other_pacific_islander_descr":"sit","white_backgrounds":[],"white_descr":[],"agreed_terms_demographics":false,"birth_country":13,"birth_city":"omnis","birth_state":8,"lived_in_us_yr":20,"lived_outside_us_yr":13,"languages":[{"language":"dicta","proficiency":"nihil"}],"citizenship_status":"odit","list_citizenship":[],"parents_marital_status":"delectus","whom_make_your_permanent_home":"dolorem","parents":[{"type":"adipisci","is_living":false,"deceased_date":"quo","first_name":"deserunt","middle_name":"facere","last_name":"pariatur","address_is":"modi","country":"tempora","state":"reprehenderit","address_line_1":"quis","address_line_2":"occaecati","zip":"non","education_level":"commodi"}],"siblings":[{"first_name":"ab","middle_name":"cumque","last_name":"aliquam","education_level":"et"}],"high_school_name":"veniam","is_boarding_high_school":true,"is_graduate_from_school":false,"high_school_name_date_started":"iusto","high_school_name_date_ended":"aut","graduate_status":[{"status":"debitis","reason":"non"}],"other_high_schools":[{"name":"voluptatum","date_started":"ea","date_ended":"quia"}],"why_leave_other_high_school":"minus","colleges":[{"name":"odit","date_started":"sunt","date_ended":"aliquid"}],"graduating_class_size":"ut","class_rank":10,"year_courses_scheduling_system":"ratione","year_courses":[{"title":"aut","level":"iure","schedule":"neque"}],"honors":[{"title":"laudantium","level":[],"level_recognition":[]}],"community_based_organizations":[{"organization_name":"et","mentor_prefix":"est","mentor_first_name":"laudantium","mentor_last_name":"sed","mentor_email":"dolor","mentor_phone":"commodi"}],"career_interest":"praesentium","sats":[{"taken_date":"cupiditate","subject":"veritatis","score":5}],"acts":[{"taken_date":"distinctio","highest_composite_score":1,"composite_date":"aut","highest_english_score":13,"english_date":"quia","highest_math_score":6,"math_date":"voluptas","highest_reading_score":9,"reading_date":"ad","highest_science_score":14,"science_date":"et"}],"aps":[{"taken_date":"possimus","subject":"molestias","score":13}],"ibs":[{"taken_date":"ab","subject":"facilis","level":"ullam","score":16}],"toefls":[{"total_score":7,"total_score_date":"quia","highest_reading_score":8,"reading_date":"quo","highest_speaking_score":8,"speaking_date":"iure","highest_listening_score":20,"listening_date":"et","highest_writing_score":16,"writing_date":"nostrum"}],"ielts":[{"total_score":4,"total_score_date":"enim","highest_reading_score":1,"reading_date":"laudantium","highest_speaking_score":8,"speaking_date":"nam","highest_listening_score":2,"listening_date":"a","highest_writing_score":20,"writing_date":"non"}],"activities":[{"type":"molestiae","position_des":"corporis","activity_des":"recusandae","grade_levels":"ut","participation_time":[],"hours_spent_per_week":9,"hours_spent_per_year":6,"intend_to_participate":false}]}'

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
    "first_name": "fuga",
    "middle_name": "sed",
    "last_name": "alias",
    "suffix": 1,
    "preferred_name": "exercitationem",
    "used_any_other_names": false,
    "former_first_name": "iusto",
    "former_middle_name": "eos",
    "former_last_name": "ut",
    "sex": true,
    "sex_descr": "et",
    "birth_date": "nihil",
    "address": [
        {
            "county": "fugit",
            "country_code": 14,
            "country_value": "reiciendis",
            "address_line_1": "qui",
            "address_line_2": "reiciendis",
            "address_line_3": "consequuntur",
            "city": "deleniti",
            "state": 8,
            "state_value": "beatae",
            "zip": "quas"
        }
    ],
    "used_mailing_address": false,
    "mailing_address": [
        {
            "county": "itaque",
            "country_code": 18,
            "country_value": "asperiores",
            "address_line_1": "dolorum",
            "address_line_2": "molestias",
            "address_line_3": "voluptatibus",
            "city": "qui",
            "state": 1,
            "state_value": "praesentium",
            "zip": "quidem"
        }
    ],
    "is_temporary_mailing_address": false,
    "temporary_mailing_address_from_date": "quae",
    "temporary_mailing_address_to_date": "odio",
    "preferred_phone": true,
    "preferred_phone_number": [
        {
            "country_code": "id",
            "phone_number": "quo",
            "extension": "unde"
        }
    ],
    "used_alternate_phone": false,
    "alternate_phone_number": [
        {
            "country_code": "expedita",
            "phone_number": "magnam",
            "extension": "voluptates"
        }
    ],
    "religion": 10,
    "us_armed_forces_status": 1,
    "us_military_anticipated_status": 19,
    "us_military_experience_1_branch": "perferendis",
    "us_military_experience_1_from_month": "fugiat",
    "us_military_experience_1_to_month": "et",
    "us_military_experience_2_branch": "vel",
    "us_military_experience_2_from_month": "qui",
    "us_military_experience_2_to_month": "rem",
    "us_military_experience_3_branch": "qui",
    "us_military_experience_3_from_month": "modi",
    "us_military_experience_3_to_month": "consequatur",
    "is_hispanic_or_latino": false,
    "hispanic_or_latino_identities": [],
    "hispanic_or_latino_descr": "enim",
    "other_identities": [],
    "is_federally_recognized_tribe": true,
    "tribe": 19,
    "tribal_enrollment_number": "autem",
    "asian_background": [],
    "asian_descr": "id",
    "african_american_backgrounds": [],
    "african_american_descr": "iure",
    "native_hawaiian_or_other_pacific_islander_backgrounds": [],
    "native_hawaiian_or_other_pacific_islander_descr": "sit",
    "white_backgrounds": [],
    "white_descr": [],
    "agreed_terms_demographics": false,
    "birth_country": 13,
    "birth_city": "omnis",
    "birth_state": 8,
    "lived_in_us_yr": 20,
    "lived_outside_us_yr": 13,
    "languages": [
        {
            "language": "dicta",
            "proficiency": "nihil"
        }
    ],
    "citizenship_status": "odit",
    "list_citizenship": [],
    "parents_marital_status": "delectus",
    "whom_make_your_permanent_home": "dolorem",
    "parents": [
        {
            "type": "adipisci",
            "is_living": false,
            "deceased_date": "quo",
            "first_name": "deserunt",
            "middle_name": "facere",
            "last_name": "pariatur",
            "address_is": "modi",
            "country": "tempora",
            "state": "reprehenderit",
            "address_line_1": "quis",
            "address_line_2": "occaecati",
            "zip": "non",
            "education_level": "commodi"
        }
    ],
    "siblings": [
        {
            "first_name": "ab",
            "middle_name": "cumque",
            "last_name": "aliquam",
            "education_level": "et"
        }
    ],
    "high_school_name": "veniam",
    "is_boarding_high_school": true,
    "is_graduate_from_school": false,
    "high_school_name_date_started": "iusto",
    "high_school_name_date_ended": "aut",
    "graduate_status": [
        {
            "status": "debitis",
            "reason": "non"
        }
    ],
    "other_high_schools": [
        {
            "name": "voluptatum",
            "date_started": "ea",
            "date_ended": "quia"
        }
    ],
    "why_leave_other_high_school": "minus",
    "colleges": [
        {
            "name": "odit",
            "date_started": "sunt",
            "date_ended": "aliquid"
        }
    ],
    "graduating_class_size": "ut",
    "class_rank": 10,
    "year_courses_scheduling_system": "ratione",
    "year_courses": [
        {
            "title": "aut",
            "level": "iure",
            "schedule": "neque"
        }
    ],
    "honors": [
        {
            "title": "laudantium",
            "level": [],
            "level_recognition": []
        }
    ],
    "community_based_organizations": [
        {
            "organization_name": "et",
            "mentor_prefix": "est",
            "mentor_first_name": "laudantium",
            "mentor_last_name": "sed",
            "mentor_email": "dolor",
            "mentor_phone": "commodi"
        }
    ],
    "career_interest": "praesentium",
    "sats": [
        {
            "taken_date": "cupiditate",
            "subject": "veritatis",
            "score": 5
        }
    ],
    "acts": [
        {
            "taken_date": "distinctio",
            "highest_composite_score": 1,
            "composite_date": "aut",
            "highest_english_score": 13,
            "english_date": "quia",
            "highest_math_score": 6,
            "math_date": "voluptas",
            "highest_reading_score": 9,
            "reading_date": "ad",
            "highest_science_score": 14,
            "science_date": "et"
        }
    ],
    "aps": [
        {
            "taken_date": "possimus",
            "subject": "molestias",
            "score": 13
        }
    ],
    "ibs": [
        {
            "taken_date": "ab",
            "subject": "facilis",
            "level": "ullam",
            "score": 16
        }
    ],
    "toefls": [
        {
            "total_score": 7,
            "total_score_date": "quia",
            "highest_reading_score": 8,
            "reading_date": "quo",
            "highest_speaking_score": 8,
            "speaking_date": "iure",
            "highest_listening_score": 20,
            "listening_date": "et",
            "highest_writing_score": 16,
            "writing_date": "nostrum"
        }
    ],
    "ielts": [
        {
            "total_score": 4,
            "total_score_date": "enim",
            "highest_reading_score": 1,
            "reading_date": "laudantium",
            "highest_speaking_score": 8,
            "speaking_date": "nam",
            "highest_listening_score": 2,
            "listening_date": "a",
            "highest_writing_score": 20,
            "writing_date": "non"
        }
    ],
    "activities": [
        {
            "type": "molestiae",
            "position_des": "corporis",
            "activity_des": "recusandae",
            "grade_levels": "ut",
            "participation_time": [],
            "hours_spent_per_week": 9,
            "hours_spent_per_year": 6,
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
        `suffix` | integer |  optional  | optional 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
        `preferred_name` | string |  optional  | optional
        `used_any_other_names` | boolean |  required  | 0:yes 1:no
        `former_first_name` | string |  optional  | optional if 'used_any_other_names' is true
        `former_middle_name` | string |  optional  | optional if 'used_any_other_names' is true
        `former_last_name` | string |  optional  | optional if 'used_any_other_names' is true
        `sex` | boolean |  required  | 0:male 1:female
        `sex_descr` | string |  optional  | optional
        `birth_date` | date |  required  | e.g."07/17/2003"
        `address.*.county` | string |  required  | 
        `address.*.country_code` | integer |  required  | 0:United States of America
        `address.*.country_value` | string |  required  | e.g."United States of America"
        `address.*.address_line_1` | string |  required  | 
        `address.*.address_line_2` | string |  optional  | optional
        `address.*.address_line_3` | string |  optional  | optional
        `address.*.city` | string |  required  | e.g."Overton"
        `address.*.state` | integer |  required  | 52:TN
        `address.*.state_value` | string |  required  | e.g."TN"
        `address.*.zip` | string |  required  | e.g."38541-6781"
        `used_mailing_address` | boolean |  required  | 0:no 1:yes
        `mailing_address.*.county` | string |  required  | if 'used_mailing_address' is true
        `mailing_address.*.country_code` | integer |  required  | if 'used_mailing_address' is true, e.g.0:United States of America
        `mailing_address.*.country_value` | string |  required  | if 'used_mailing_address' is true, e.g."United States of America"
        `mailing_address.*.address_line_1` | string |  required  | if 'used_mailing_address' is true
        `mailing_address.*.address_line_2` | string |  optional  | optional if 'used_mailing_address' is true
        `mailing_address.*.address_line_3` | string |  optional  | optional if 'used_mailing_address' is true
        `mailing_address.*.city` | string |  required  | if 'used_mailing_address' is true, e.g."Overton"
        `mailing_address.*.state` | integer |  required  | if 'used_mailing_address' is true, e.g.52:TN
        `mailing_address.*.state_value` | string |  required  | if 'used_mailing_address' is true, e.g."TN"
        `mailing_address.*.zip` | string |  required  | if 'used_mailing_address' is true, e.g."38541-6781"
        `is_temporary_mailing_address` | boolean |  required  | if 'used_mailing_address' is true, e.g.0:yes 1:no
        `temporary_mailing_address_from_date` | date |  required  | if 'is_temporary_mailing_address' is true
        `temporary_mailing_address_to_date` | date |  required  | if 'is_temporary_mailing_address' is true
        `preferred_phone` | boolean |  required  | 0:home 1:mobile
        `preferred_phone_number.*.country_code` | string |  required  | e.g."+886"
        `preferred_phone_number.*.phone_number` | string |  required  | e.g."970824452"
        `preferred_phone_number.*.extension` | string |  optional  | optional
        `used_alternate_phone` | boolean |  required  | 0:no 1:home 2:mobile
        `alternate_phone_number.*.country_code` | string |  required  | if 'used_alternate_phone' is true, e.g."+886"
        `alternate_phone_number.*.phone_number` | string |  required  | if 'used_alternate_phone' is true, e.g."970824452"
        `alternate_phone_number.*.extension` | string |  optional  | if 'used_alternate_phone' is true
        `religion` | integer |  optional  | optional 40:Agnostic 3:Buddhist
        `us_armed_forces_status` | integer |  required  | 0:none 1:currently serving 2:previously served 3:current dependent
        `us_military_anticipated_status` | integer |  required  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:On active duty U.S. military 1:Veteran of U.S. Armed Forces 2:U.S. Reserves or National Guard
        `us_military_experience_1_branch` | required |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experience_1_from_month` | string |  required  | if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experience_1_to_month` | string |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `us_military_experience_2_branch` | required |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experience_2_from_month` | string |  required  | if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experience_2_to_month` | string |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `us_military_experience_3_branch` | required |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experience_3_from_month` | string |  required  | if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experience_3_to_month` | string |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `is_hispanic_or_latino` | boolean |  required  | 0:yes 1:no
        `hispanic_or_latino_identities` | array |  optional  | if 'is_hispanic_or_latino' is true, e.g.["0"(Central America), "1"(Cuba), "2"(Mexico), "3"(Puerto Rico), "4"(South America), "5"(Spain), "6"(Other)]
        `hispanic_or_latino_descr` | string |  optional  | optional
        `other_identities` | array |  optional  | optional e.g.["0"(American Indian or Alaska Native), "1"(Asian), "2"(Black or African American), "3"(Native Hawaiian or Other Pacific Islander), "4"(White)]
        `is_federally_recognized_tribe` | boolean |  required  | if "0"(American Indian or Alaska Native) is selected in 'other_identities', e.g.0:yes 1:no
        `tribe` | integer |  optional  | if 'is_federally_recognized_tribe' is true, e.g.null, 0:AK-Agdaagux
        `tribal_enrollment_number` | string |  optional  | if 'is_federally_recognized_tribe' is true
        `asian_background` | array |  optional  | if "1"(Asian) is selected in 'other_identities', e.g.["7"(Other East Asia)]
        `asian_descr` | string |  optional  | if "1"(Asian) is selected in 'other_identities'
        `african_american_backgrounds` | array |  optional  | if "2"(Black or African American) is selected in 'other_identities', e.g.["0"(U.S.)]
        `african_american_descr` | string |  optional  | if "2"(Black or African American) is selected in 'other_identities'
        `native_hawaiian_or_other_pacific_islander_backgrounds` | array |  optional  | if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
        `native_hawaiian_or_other_pacific_islander_descr` | string |  optional  | if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
        `white_backgrounds` | array |  optional  | if "4"(White) is selected in 'other_identities'
        `white_descr` | array |  optional  | if "4"(White) is selected in 'other_identities'
        `agreed_terms_demographics` | boolean |  required  | 1:yes
        `birth_country` | integer |  required  | 0:United States of America
        `birth_city` | string |  required  | 
        `birth_state` | integer |  required  | 3:Alabama
        `lived_in_us_yr` | integer |  required  | 
        `lived_outside_us_yr` | integer |  required  | 
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


