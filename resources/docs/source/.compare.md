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

== Personal Information ==

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api-doc/example" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"voluptate","middle_name":"explicabo","last_name":"exercitationem","suffix":8,"preferred_name":"numquam","used_any_other_names":true,"former_first_name":"atque","former_middle_name":"aperiam","former_last_name":"omnis","sex":false,"sex_descr":"illum","birth_date":"suscipit","address":[{"county":"earum","country_code":18,"country_value":"consequatur","address_line_1":"ut","address_line_2":"aliquid","address_line_3":"dolorem","city":"ullam","state":1,"state_value":"quibusdam","zip":"voluptatibus"}],"used_mailing_address":true,"mailing_address":[{"county":"recusandae","country_code":17,"country_value":"ut","address_line_1":"quae","address_line_2":"hic","address_line_3":"hic","city":"sit","state":19,"state_value":"natus","zip":"voluptatem"}],"is_temporary_mailing_address":true,"temporary_mailing_address_from_date":"dolorum","temporary_mailing_address_to_date":"vel","preferred_phone":false,"preferred_phone_number":[{"country_code":"quod","phone_number":"corporis","extension":"et"}],"used_alternate_phone":false,"alternate_phone_number":[{"country_code":"dolorem","phone_number":"saepe","extension":"placeat"}],"religion":9,"religion_descr":"ut","us_armed_forces_status":14,"us_military_anticipated_status":16,"us_military_experiences":[{"branch":17,"from_month":"voluptatem","to_month":"saepe"}],"ever_received_discharge":true,"discharge_descr":"saepe","is_hispanic_or_latino":true,"hispanic_or_latino_identities":[],"hispanic_or_latino_descr":"tempore","other_identities":[],"tribal_identity":"numquam","is_federally_recognized_tribe":true,"tribe":9,"tribal_enrollment_number":"voluptas","asian_backgrounds":[],"east_asian_descr":"quia","south_asian_descr":"et","southeast_asian_descr":"vitae","african_american_backgrounds":[],"african_american_descr":"vitae","native_hawaiian_or_other_pacific_islander_backgrounds":[],"native_hawaiian_or_other_pacific_islander_descr":"et","white_backgrounds":[],"white_descr":[],"agreed_terms_demographics":false,"birth_country":8,"birth_city":"ab","birth_state":9,"lived_in_us_yr":13,"lived_outside_us_yr":20,"languages":[{"lang":7,"proficiency":[]}],"citizenship_status":20,"ssn_number":"molestiae","list_citizenship":[],"green_card_file":"qui","arn_number":"eligendi","arn_expiration_date":"neque","hold_us_visa":false,"held_visa":17,"visa_number":"repudiandae","visa_date_issued":"quas","other_visa_type_descr":"eveniet","want_to_apply_us_visa":9,"want_to_apply_other_visa_descr":"in","apply_fee_waiver":true,"fee_waiver_indicators":[],"fee_waiver_signature":"odit","want_info_from_strive_for_college":true,"parents_marital_status":4,"divorced_yr":"et","want_to_list_step_parents":false,"step_parents_number":1,"whom_make_your_permanent_home":8,"living_situation_descr":"nemo","has_children":true,"children_number":1,"parents":[{"type":7,"is_living":true,"deceased_date":"velit","prefix":12,"first_name":"provident","middle_name":"numquam","last_name":"et","former_last_name":"praesentium","suffix":13,"birth_country":18,"occupation":15,"occupation_descr":"dolores","education_level":7,"colleges":[{"name":"eum","ceeb_code":17,"school_type_code":"nulla","city":"quidem","state":"ab","state_value":"aut","zip":"consequatur","country_code":11,"country_value":"libero","address_line_1":"optio","address_line_2":"inventore","address_line_3":"voluptatem","degrees":[{"name":16,"received_yr":"praesentium"}]}]}],"prefix":8,"relationship":"ipsam","email":"corrupti","address_type":15,"occupation":9,"occupation_descr":"velit","employment_status":15,"position":"voluptas","is_employed_or_retired_college":false,"current_employer_name":"ad","college_employer":[{"name":"praesentium","ceeb_code":4,"school_type_code":"quo","city":"autem","state":"rerum","state_value":"quibusdam","zip":"reprehenderit","country_code":17,"country_value":"sunt","address_line_1":"saepe","address_line_2":"praesentium","address_line_3":"et"}],"education_level":17,"colleges":[{"name":"sequi","ceeb_code":18,"school_type_code":"veritatis","city":"quia","state":"consequatur","state_value":"ipsa","zip":"similique","country_code":15,"country_value":"ullam","address_line_1":"quidem","address_line_2":"aut","address_line_3":"eveniet","degrees":[{"name":2,"received_yr":"asperiores"}],"course_details":3,"from_month":"amet","to_month":"distinctio","degree":2}],"siblings":[{"first_name":"doloribus","middle_name":"veritatis","last_name":"rem","age":6,"relationship":18,"education_level":7,"college":[{"name":"facilis","ceeb_code":19,"school_type_code":"ipsam","city":"ullam","state":"voluptates","state_value":"in","zip":"sed","country_code":10,"country_value":"dolor","address_line_1":"id","address_line_2":"ad","address_line_3":"a","degree":[{"name":19,"from_month":"rerum","to_month":"aliquam"}]}]}],"name":"quis","ceeb_code":7,"school_type_code":"perferendis","city":"placeat","state":"quas","state_value":"aut","zip":"ea","country_code":13,"country_value":"temporibus","address_line_1":"explicabo","address_line_2":"veniam","address_line_3":"veniam","entry_month":"mollitia","is_boarding_high_school":true,"live_on_campus":true,"graduate_from_school":false,"high_school_exit_month":"sed","receive_high_school_equivalency":true,"receive_high_school_equivalency_month":"tempore","high_school_descr":"ut","progression":[],"progression_descr":"et","other_high_schools":[{"name":"maiores","ceeb_code":9,"school_type_code":"qui","city":"occaecati","state":"repudiandae","state_value":"eligendi","zip":"quam","country_code":20,"country_value":"perspiciatis","address_line_1":"omnis","address_line_2":"excepturi","address_line_3":"dolorum","from_month":"nobis","to_month":"delectus"}],"why_leave_other_high_school":"possimus","graduating_class_size":"est","class_rank":11,"year_courses_scheduling_system":"expedita","year_courses":[{"title":"repellat","level":"fugiat","schedule":"accusantium"}],"honors":[{"title":"et","level":[],"level_recognition":[]}],"community_based_organizations":[{"organization_name":"qui","mentor_prefix":"et","mentor_first_name":"enim","mentor_last_name":"deserunt","mentor_email":"aut","mentor_phone":"ipsam"}],"career_interest":"est","sats":[{"taken_date":"velit","subject":"sit","score":16}],"acts":[{"taken_date":"corrupti","highest_composite_score":2,"composite_date":"quia","highest_english_score":13,"english_date":"ipsa","highest_math_score":4,"math_date":"sed","highest_reading_score":16,"reading_date":"necessitatibus","highest_science_score":1,"science_date":"excepturi"}],"aps":[{"taken_date":"sit","subject":"nulla","score":8}],"ibs":[{"taken_date":"facilis","subject":"nemo","level":"magnam","score":9}],"toefls":[{"total_score":6,"total_score_date":"libero","highest_reading_score":2,"reading_date":"ut","highest_speaking_score":13,"speaking_date":"explicabo","highest_listening_score":14,"listening_date":"error","highest_writing_score":11,"writing_date":"et"}],"ielts":[{"total_score":5,"total_score_date":"sequi","highest_reading_score":8,"reading_date":"cupiditate","highest_speaking_score":11,"speaking_date":"provident","highest_listening_score":17,"listening_date":"itaque","highest_writing_score":9,"writing_date":"vel"}],"activities":[{"type":"quasi","position_des":"libero","activity_des":"amet","grade_levels":"natus","participation_time":[],"hours_spent_per_week":3,"hours_spent_per_year":18,"intend_to_participate":false}]}'

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
    "first_name": "voluptate",
    "middle_name": "explicabo",
    "last_name": "exercitationem",
    "suffix": 8,
    "preferred_name": "numquam",
    "used_any_other_names": true,
    "former_first_name": "atque",
    "former_middle_name": "aperiam",
    "former_last_name": "omnis",
    "sex": false,
    "sex_descr": "illum",
    "birth_date": "suscipit",
    "address": [
        {
            "county": "earum",
            "country_code": 18,
            "country_value": "consequatur",
            "address_line_1": "ut",
            "address_line_2": "aliquid",
            "address_line_3": "dolorem",
            "city": "ullam",
            "state": 1,
            "state_value": "quibusdam",
            "zip": "voluptatibus"
        }
    ],
    "used_mailing_address": true,
    "mailing_address": [
        {
            "county": "recusandae",
            "country_code": 17,
            "country_value": "ut",
            "address_line_1": "quae",
            "address_line_2": "hic",
            "address_line_3": "hic",
            "city": "sit",
            "state": 19,
            "state_value": "natus",
            "zip": "voluptatem"
        }
    ],
    "is_temporary_mailing_address": true,
    "temporary_mailing_address_from_date": "dolorum",
    "temporary_mailing_address_to_date": "vel",
    "preferred_phone": false,
    "preferred_phone_number": [
        {
            "country_code": "quod",
            "phone_number": "corporis",
            "extension": "et"
        }
    ],
    "used_alternate_phone": false,
    "alternate_phone_number": [
        {
            "country_code": "dolorem",
            "phone_number": "saepe",
            "extension": "placeat"
        }
    ],
    "religion": 9,
    "religion_descr": "ut",
    "us_armed_forces_status": 14,
    "us_military_anticipated_status": 16,
    "us_military_experiences": [
        {
            "branch": 17,
            "from_month": "voluptatem",
            "to_month": "saepe"
        }
    ],
    "ever_received_discharge": true,
    "discharge_descr": "saepe",
    "is_hispanic_or_latino": true,
    "hispanic_or_latino_identities": [],
    "hispanic_or_latino_descr": "tempore",
    "other_identities": [],
    "tribal_identity": "numquam",
    "is_federally_recognized_tribe": true,
    "tribe": 9,
    "tribal_enrollment_number": "voluptas",
    "asian_backgrounds": [],
    "east_asian_descr": "quia",
    "south_asian_descr": "et",
    "southeast_asian_descr": "vitae",
    "african_american_backgrounds": [],
    "african_american_descr": "vitae",
    "native_hawaiian_or_other_pacific_islander_backgrounds": [],
    "native_hawaiian_or_other_pacific_islander_descr": "et",
    "white_backgrounds": [],
    "white_descr": [],
    "agreed_terms_demographics": false,
    "birth_country": 8,
    "birth_city": "ab",
    "birth_state": 9,
    "lived_in_us_yr": 13,
    "lived_outside_us_yr": 20,
    "languages": [
        {
            "lang": 7,
            "proficiency": []
        }
    ],
    "citizenship_status": 20,
    "ssn_number": "molestiae",
    "list_citizenship": [],
    "green_card_file": "qui",
    "arn_number": "eligendi",
    "arn_expiration_date": "neque",
    "hold_us_visa": false,
    "held_visa": 17,
    "visa_number": "repudiandae",
    "visa_date_issued": "quas",
    "other_visa_type_descr": "eveniet",
    "want_to_apply_us_visa": 9,
    "want_to_apply_other_visa_descr": "in",
    "apply_fee_waiver": true,
    "fee_waiver_indicators": [],
    "fee_waiver_signature": "odit",
    "want_info_from_strive_for_college": true,
    "parents_marital_status": 4,
    "divorced_yr": "et",
    "want_to_list_step_parents": false,
    "step_parents_number": 1,
    "whom_make_your_permanent_home": 8,
    "living_situation_descr": "nemo",
    "has_children": true,
    "children_number": 1,
    "parents": [
        {
            "type": 7,
            "is_living": true,
            "deceased_date": "velit",
            "prefix": 12,
            "first_name": "provident",
            "middle_name": "numquam",
            "last_name": "et",
            "former_last_name": "praesentium",
            "suffix": 13,
            "birth_country": 18,
            "occupation": 15,
            "occupation_descr": "dolores",
            "education_level": 7,
            "colleges": [
                {
                    "name": "eum",
                    "ceeb_code": 17,
                    "school_type_code": "nulla",
                    "city": "quidem",
                    "state": "ab",
                    "state_value": "aut",
                    "zip": "consequatur",
                    "country_code": 11,
                    "country_value": "libero",
                    "address_line_1": "optio",
                    "address_line_2": "inventore",
                    "address_line_3": "voluptatem",
                    "degrees": [
                        {
                            "name": 16,
                            "received_yr": "praesentium"
                        }
                    ]
                }
            ]
        }
    ],
    "prefix": 8,
    "relationship": "ipsam",
    "email": "corrupti",
    "address_type": 15,
    "occupation": 9,
    "occupation_descr": "velit",
    "employment_status": 15,
    "position": "voluptas",
    "is_employed_or_retired_college": false,
    "current_employer_name": "ad",
    "college_employer": [
        {
            "name": "praesentium",
            "ceeb_code": 4,
            "school_type_code": "quo",
            "city": "autem",
            "state": "rerum",
            "state_value": "quibusdam",
            "zip": "reprehenderit",
            "country_code": 17,
            "country_value": "sunt",
            "address_line_1": "saepe",
            "address_line_2": "praesentium",
            "address_line_3": "et"
        }
    ],
    "education_level": 17,
    "colleges": [
        {
            "name": "sequi",
            "ceeb_code": 18,
            "school_type_code": "veritatis",
            "city": "quia",
            "state": "consequatur",
            "state_value": "ipsa",
            "zip": "similique",
            "country_code": 15,
            "country_value": "ullam",
            "address_line_1": "quidem",
            "address_line_2": "aut",
            "address_line_3": "eveniet",
            "degrees": [
                {
                    "name": 2,
                    "received_yr": "asperiores"
                }
            ],
            "course_details": 3,
            "from_month": "amet",
            "to_month": "distinctio",
            "degree": 2
        }
    ],
    "siblings": [
        {
            "first_name": "doloribus",
            "middle_name": "veritatis",
            "last_name": "rem",
            "age": 6,
            "relationship": 18,
            "education_level": 7,
            "college": [
                {
                    "name": "facilis",
                    "ceeb_code": 19,
                    "school_type_code": "ipsam",
                    "city": "ullam",
                    "state": "voluptates",
                    "state_value": "in",
                    "zip": "sed",
                    "country_code": 10,
                    "country_value": "dolor",
                    "address_line_1": "id",
                    "address_line_2": "ad",
                    "address_line_3": "a",
                    "degree": [
                        {
                            "name": 19,
                            "from_month": "rerum",
                            "to_month": "aliquam"
                        }
                    ]
                }
            ]
        }
    ],
    "name": "quis",
    "ceeb_code": 7,
    "school_type_code": "perferendis",
    "city": "placeat",
    "state": "quas",
    "state_value": "aut",
    "zip": "ea",
    "country_code": 13,
    "country_value": "temporibus",
    "address_line_1": "explicabo",
    "address_line_2": "veniam",
    "address_line_3": "veniam",
    "entry_month": "mollitia",
    "is_boarding_high_school": true,
    "live_on_campus": true,
    "graduate_from_school": false,
    "high_school_exit_month": "sed",
    "receive_high_school_equivalency": true,
    "receive_high_school_equivalency_month": "tempore",
    "high_school_descr": "ut",
    "progression": [],
    "progression_descr": "et",
    "other_high_schools": [
        {
            "name": "maiores",
            "ceeb_code": 9,
            "school_type_code": "qui",
            "city": "occaecati",
            "state": "repudiandae",
            "state_value": "eligendi",
            "zip": "quam",
            "country_code": 20,
            "country_value": "perspiciatis",
            "address_line_1": "omnis",
            "address_line_2": "excepturi",
            "address_line_3": "dolorum",
            "from_month": "nobis",
            "to_month": "delectus"
        }
    ],
    "why_leave_other_high_school": "possimus",
    "graduating_class_size": "est",
    "class_rank": 11,
    "year_courses_scheduling_system": "expedita",
    "year_courses": [
        {
            "title": "repellat",
            "level": "fugiat",
            "schedule": "accusantium"
        }
    ],
    "honors": [
        {
            "title": "et",
            "level": [],
            "level_recognition": []
        }
    ],
    "community_based_organizations": [
        {
            "organization_name": "qui",
            "mentor_prefix": "et",
            "mentor_first_name": "enim",
            "mentor_last_name": "deserunt",
            "mentor_email": "aut",
            "mentor_phone": "ipsam"
        }
    ],
    "career_interest": "est",
    "sats": [
        {
            "taken_date": "velit",
            "subject": "sit",
            "score": 16
        }
    ],
    "acts": [
        {
            "taken_date": "corrupti",
            "highest_composite_score": 2,
            "composite_date": "quia",
            "highest_english_score": 13,
            "english_date": "ipsa",
            "highest_math_score": 4,
            "math_date": "sed",
            "highest_reading_score": 16,
            "reading_date": "necessitatibus",
            "highest_science_score": 1,
            "science_date": "excepturi"
        }
    ],
    "aps": [
        {
            "taken_date": "sit",
            "subject": "nulla",
            "score": 8
        }
    ],
    "ibs": [
        {
            "taken_date": "facilis",
            "subject": "nemo",
            "level": "magnam",
            "score": 9
        }
    ],
    "toefls": [
        {
            "total_score": 6,
            "total_score_date": "libero",
            "highest_reading_score": 2,
            "reading_date": "ut",
            "highest_speaking_score": 13,
            "speaking_date": "explicabo",
            "highest_listening_score": 14,
            "listening_date": "error",
            "highest_writing_score": 11,
            "writing_date": "et"
        }
    ],
    "ielts": [
        {
            "total_score": 5,
            "total_score_date": "sequi",
            "highest_reading_score": 8,
            "reading_date": "cupiditate",
            "highest_speaking_score": 11,
            "speaking_date": "provident",
            "highest_listening_score": 17,
            "listening_date": "itaque",
            "highest_writing_score": 9,
            "writing_date": "vel"
        }
    ],
    "activities": [
        {
            "type": "quasi",
            "position_des": "libero",
            "activity_des": "amet",
            "grade_levels": "natus",
            "participation_time": [],
            "hours_spent_per_week": 3,
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
    `first_name` | string |  required  | question-id-536
        `middle_name` | string |  optional  | question-id-537
        `last_name` | string |  required  | question-id-538
        `suffix` | integer |  optional  | question-id-539, e.g.null, 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
        `preferred_name` | string |  optional  | question-id-179
        `used_any_other_names` | boolean |  required  | question-id-177, e.g.0:yes 1:no
        `former_first_name` | string |  optional  | question-id-1950, if 'used_any_other_names' is true
        `former_middle_name` | string |  optional  | question-id-1951, if 'used_any_other_names' is true
        `former_last_name` | string |  optional  | question-id-927
        `sex` | boolean |  required  | question-id-180, e.g.0:male 1:female
        `sex_descr` | string |  optional  | question-id-1901
        `birth_date` | date |  required  | question-id-181, e.g."07/17/2003"
        `address.*.county` | string |  optional  | question-id-545, if "1" is selected in 'address_type'
        `address.*.country_code` | integer |  required  | 0:United States of America 242:Taiwan
        `address.*.country_value` | string |  required  | e.g."United States of America"
        `address.*.address_line_1` | string |  required  | 
        `address.*.address_line_2` | string |  optional  | 
        `address.*.address_line_3` | string |  optional  | 
        `address.*.city` | string |  required  | e.g."Overton"
        `address.*.state` | integer |  optional  | optional, but required if "0"(USA) is selected as country, e.g.null
        `address.*.state_value` | string |  optional  | optional, but required if "0"(USA) is selected as country, e.g.null, "TN"
        `address.*.zip` | string |  optional  | optional, but required if "0"(USA) is selected as country, e.g.null, "38541-6781"
        `used_mailing_address` | boolean |  required  | question-id-183, e.g.0:no 1:yes
        `mailing_address.*.county` | string |  optional  | question-id-186, if 'used_mailing_address' is true
        `mailing_address.*.country_code` | integer |  required  | if 'used_mailing_address' is true, e.g.0:United States of America
        `mailing_address.*.country_value` | string |  required  | if 'used_mailing_address' is true, e.g."United States of America"
        `mailing_address.*.address_line_1` | string |  required  | if 'used_mailing_address' is true
        `mailing_address.*.address_line_2` | string |  optional  | if 'used_mailing_address' is true
        `mailing_address.*.address_line_3` | string |  optional  | if 'used_mailing_address' is true
        `mailing_address.*.city` | string |  required  | if 'used_mailing_address' is true, e.g."Overton"
        `mailing_address.*.state` | integer |  required  | if 'used_mailing_address' is true, e.g.52:TN
        `mailing_address.*.state_value` | string |  required  | if 'used_mailing_address' is true, e.g."TN"
        `mailing_address.*.zip` | string |  required  | if 'used_mailing_address' is true, e.g."38541-6781"
        `is_temporary_mailing_address` | boolean |  required  | question-id-1042, if 'used_mailing_address' is true, e.g.0:yes 1:no
        `temporary_mailing_address_from_date` | date |  required  | question-id-184, if 'is_temporary_mailing_address' is true
        `temporary_mailing_address_to_date` | date |  required  | question-id-185, if 'is_temporary_mailing_address' is true
        `preferred_phone` | boolean |  optional  | question-id-542, 0:home 1:mobile 2:other 3:work
        `preferred_phone_number.*.country_code` | string |  optional  | question-id-543, e.g."+886"
        `preferred_phone_number.*.phone_number` | string |  optional  | e.g."970824452"
        `preferred_phone_number.*.extension` | string |  optional  | 
        `used_alternate_phone` | boolean |  required  | question-id-190, e.g.0:no 1:home 2:mobile
        `alternate_phone_number.*.country_code` | string |  required  | question-id-191, if 'used_alternate_phone' is true, e.g."+886"
        `alternate_phone_number.*.phone_number` | string |  required  | if 'used_alternate_phone' is true, e.g."970824452"
        `alternate_phone_number.*.extension` | string |  optional  | if 'used_alternate_phone' is true
        `religion` | integer |  optional  | question-id-192, e.g.40:Agnostic 0:Anglican (Episcopal) 48:Assemblies of God 41:Atheist 3:Buddhist
        `religion_descr` | string |  optional  | question-id-193
        `us_armed_forces_status` | integer |  required  | question-id-194, e.g.0:none 1:currently serving 2:previously served 3:current dependent
        `us_military_anticipated_status` | integer |  required  | question-id-195, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:On active duty U.S. military 1:Veteran of U.S. Armed Forces 2:U.S. Reserves or National Guard
        `us_military_experiences.*.branch` | integer |  required  | The min length of 'us_military_experiences' is 1 and the max length is 3 if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experiences.*.from_month` | string |  required  | if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experiences.*.to_month` | string |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `ever_received_discharge` | boolean |  optional  | question-id-199, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:yes 1:no
        `discharge_descr` | string |  optional  | question-id-1044, if 'ever_receive_discharge' is true, e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
        `is_hispanic_or_latino` | boolean |  required  | question-id-200, e.g.0:yes 1:no
        `hispanic_or_latino_identities` | array |  optional  | question-id-201, if 'is_hispanic_or_latino' is true, e.g.["0"(Central America), "1"(Cuba), "2"(Mexico), "3"(Puerto Rico), "4"(South America), "5"(Spain), "6"(Other)]
        `hispanic_or_latino_descr` | string |  optional  | question-id-202
        `other_identities` | array |  optional  | question-id-203, e.g.["0"(American Indian or Alaska Native), "1"(Asian), "2"(Black or African American), "3"(Native Hawaiian or Other Pacific Islander), "4"(White)]
        `tribal_identity` | string |  optional  | question-id-205, if "0"(American Indian or Alaska Native) is selected in 'other_identities'
        `is_federally_recognized_tribe` | boolean |  required  | question-id-205, if "0"(American Indian or Alaska Native) is selected in 'other_identities', e.g.0:yes 1:no
        `tribe` | integer |  optional  | question-id-1069, if 'is_federally_recognized_tribe' is true, e.g.null, 0:AK-Agdaagux
        `tribal_enrollment_number` | string |  optional  | question-id-207, if 'is_federally_recognized_tribe' is true
        `asian_backgrounds` | array |  optional  | question-id-208, if "1"(Asian) is selected in 'other_identities', e.g.["7"(Other East Asia), "8"(Other South Asia), "9"(Other Southeast Asia)]
        `east_asian_descr` | string |  optional  | question-id-209, if "7"(Other East Asia) is selected in 'asian_backgrounds'
        `south_asian_descr` | string |  optional  | question-id-210, if "8"(Other South Asia) is selected in 'asian_backgrounds'
        `southeast_asian_descr` | string |  optional  | question-id-211, if "9"(Other Southeast Asia) is selected in 'asian_backgrounds'
        `african_american_backgrounds` | array |  optional  | question-id-212, if "2"(Black or African American) is selected in 'other_identities', e.g.["0"(U.S.)]
        `african_american_descr` | string |  optional  | question-id-213, if "2"(Black or African American) is selected in 'other_identities'
        `native_hawaiian_or_other_pacific_islander_backgrounds` | array |  optional  | question-id-214, if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
        `native_hawaiian_or_other_pacific_islander_descr` | string |  optional  | question-id-215, if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
        `white_backgrounds` | array |  optional  | question-id-216, if "4"(White) is selected in 'other_identities'
        `white_descr` | array |  optional  | question-id-217, if "4"(White) is selected in 'other_identities'
        `agreed_terms_demographics` | boolean |  required  | question-id-1782, 1:yes
        `birth_country` | integer |  required  | question-id-218, e.g.0:United States of America
        `birth_city` | string |  required  | question-id-219
        `birth_state` | integer |  optional  | question-id-220, optional, but required if "0" is selected as 'birth_country', e.g.3:Alabama
        `lived_in_us_yr` | integer |  required  | question-id-221
        `lived_outside_us_yr` | integer |  required  | question-id-222
        `languages.*.lang` | integer |  required  | The min length of 'languages' is 1, while the max length is 5 with at least 1 language as first language required, e.g.0:English 1:Spanish 2:Aceh
        `languages.*.proficiency` | array |  required  | 3:First Language 0:Speak 1:Read 2:Write 4:Spoken at Home
        `citizenship_status` | integer |  required  | question-id-234, e.g.0:U.S. Citizen or U.S. National 1:U.S. Dual Citizen 5:U.S. Permanent Resident 4:U.S. Refugee or Asylee 3:Other (Non-US)
        `ssn_number` | string |  optional  | question-id-235, e.g."222-11-1111"
        `list_citizenship` | array |  required  | question-id-236, if "1", "5", "4" or "3" is selected in 'citizenship_status', e.g.["0"(Canada), "241"(Taiwan)]
        `green_card_file` | file |  optional  | question-id-237, if "5" is selected in 'citizenship_status',
        `arn_number` | string |  optional  | question-id-238, if "5" is selected in 'citizenship_status',
        `arn_expiration_date` | date |  optional  | question-id-239, if "5" is selected in 'citizenship_status', e.g."11/27/2025"
        `hold_us_visa` | boolean |  required  | question-id-1836, e.g.0:yes 1:no
        `held_visa` | integer |  required  | question-id-240, if 'hold_us_visa' is true, e.g.1:A-1 2:A-2 3:A-3 4:B-2 5:E-2 6:F-1 7:F-2 8:G-1 9:G-2 10:G-3 11:G-4 12:H-4 13:J-1 14:J-2 15:L-2 16:other 17:R-2
        `visa_number` | string |  required  | question-id-242, if 'hold_us_visa' is true
        `visa_date_issued` | date |  required  | question-id-243, if 'hold_us_visa' is true, e.g."11/27/2025"
        `other_visa_type_descr` | string |  required  | question-id-241, if "16' is selected in 'held_visa'
        `want_to_apply_us_visa` | integer |  optional  | question-id-1837, noticed that "4" is skipped in the options, e.g.null, 21:I do not intend to apply for a U.S. visa 20:I do not know which visa I will hold 1:A-1 2:A-2 3:A-3 5:B-2 6:E-2 7:F-1 8:F-2 9:G-1 10:G-2 11:G-3 12:G-4 13:H-4 14:J-1 15:J-2 16:L-2 17:other 18:R-2
        `want_to_apply_other_visa_descr` | string |  optional  | question-id-1838, if "17" is selected in 'want_to_apply_us_visa'
        `apply_fee_waiver` | boolean |  required  | question-id-1021, e.g.0:yes 1:no
        `fee_waiver_indicators` | array |  required  | question-id-1805, if 'apply_fee_waiver' is true, e.g.["0"(I have received or am eligible to receive an ACT or SAT testing fee waiver), "1"(I am enrolled in or am eligible to participate in the Federal Free or Reduced Price Lunch program (FRPL))]
        `fee_waiver_signature` | string |  required  | question-id-1022, if 'apply_fee_waiver' is true, e.g."name"
        `want_info_from_strive_for_college` | boolean |  optional  | question-id-1911, if 'apply_fee_waiver' is true, e.g."", 0:yes 1:no
        `parents_marital_status` | integer |  required  | question-id-364, e.g.0:Married 1:Separated 2:Divorced 3:Never Married 4:Widowed 5:Civil Union/Domestic Partners
        `divorced_yr` | string |  required  | question-id-365, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g."2021"
        `want_to_list_step_parents` | boolean |  required  | question-id-367, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g.0:yes 1:no
        `step_parents_number` | integer |  required  | question-id-368, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g.1 or 2
        `whom_make_your_permanent_home` | integer |  required  | question-id-366, e.g.0:Parent-1 1:Parent-2 2:Both 3:Legal Guardian 4:Other 5:Ward of the Court/State
        `living_situation_descr` | string |  optional  | question-id-1921, if "4"(Other) is selected in 'whom_make_your_permanent_home', maxlength:100
        `has_children` | boolean |  optional  | question-id-369, e.g."", 0:yes 1:no
        `children_number` | integer |  required  | question-id-370, if 'has_children' is true, min:0 max:99
        `parents.*.type` | integer |  required  | The length of 'parents' is 2, e.g.0:Mother 1:Father 2: I have limited information about this parent
        `parents.*.is_living` | boolean |  required  | 0:yes 1:no
        `parents.*.deceased_date` | date |  required  | if 'parents.*.is_living' is false
        `parents.*.prefix` | integer |  required  | 0:Dr. 1:Mr. 2:Ms. 3:Mrs.
        `parents.*.first_name` | string |  required  | 
        `parents.*.middle_name` | string |  optional  | 
        `parents.*.last_name` | string |  required  | 
        `parents.*.former_last_name` | string |  optional  | 
        `parents.*.suffix` | integer |  optional  | null, 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
        `parents.*.birth_country` | integer |  optional  | null, 0:United States of America 1:Canada
        `parents.*.occupation` | integer |  optional  | null, 0:Accountant or actuary 1:Actor or entertainer 2:Architect or urban planner 3:Artist 4:Business (clerical) 5:Business executive (management, administrator) 6:Business owner or proprietor 7:Business salesperson or buyer 8:Clergy (minister, priest) 9:Clergy (other religious) 44:Other
        `parents.*.occupation_descr` | string |  optional  | 
        `parents.*.education_level` | integer |  required  | null, 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
        `parents.*.colleges.*.name` | string |  required  | The min length of 'parents.*.colleges' is 0 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g."Aalto University"
        `parents.*.colleges.*.ceeb_code` | integer |  optional  | e.g."1700"
        `parents.*.colleges.*.school_type_code` | string |  optional  | e.g."4-year college or university"
        `parents.*.colleges.*.city` | string |  optional  | e.g."Aalto"
        `parents.*.colleges.*.state` | string |  optional  | 
        `parents.*.colleges.*.state_value` | string |  optional  | 
        `parents.*.colleges.*.zip` | string |  optional  | e.g."FI-00076"
        `parents.*.colleges.*.country_code` | integer |  required  | e.g."242"
        `parents.*.colleges.*.country_value` | string |  required  | e.g."TWN"
        `parents.*.colleges.*.address_line_1` | string |  optional  | e.g."PO Box 21210"
        `parents.*.colleges.*.address_line_2` | string |  optional  | 
        `parents.*.colleges.*.address_line_3` | string |  optional  | The min length of 'parents.*.colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level':
        `parents.*.colleges.*.degrees.*.name` | integer |  required  | The min length of 'parents.*.colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
        `parents.*.colleges.*.degrees.*.received_yr` | string |  required  | e.g."2021"
        `prefix` | integer |  optional  | question-id-535, e.g.0:Dr. 1:Mr. 2:Ms. 3:Mrs.
        `relationship` | string |  required  | question-id-540
        `email` | string |  optional  | question-id-541
        `address_type` | integer |  required  | question-id-544, e.g.0:same as my home address 1:different
        `occupation` | integer |  optional  | question-id-546
        `occupation_descr` | string |  optional  | question-id-1785, if "44"(Other) is selected in 'occupation'
        `employment_status` | integer |  required  | question-id-547, e.g.0:Employed 1:Unemployed 2:Retired 3:Self-Employed
        `position` | string |  optional  | question-id-548, if "0"(Employed) or "2"(Retired) is selected in 'employment_status', maxlength:40
        `is_employed_or_retired_college` | boolean |  required  | question-id-549, if "0"(Employed) or "2"(Retired) is selected in 'employment_status', e.g.1:currently employed 2:retired 3:never
        `current_employer_name` | string |  required  | question-id-550, if "2"(retired) or "3"(never) is selected in 'is_employed_or_retired_college'
        `college_employer.*.name` | string |  required  | question-id-551, if "1"(currently employed) or "2"(retired) is selected in 'is_employed_or_retired_college'
        `college_employer.*.ceeb_code` | integer |  optional  | e.g."1700"
        `college_employer.*.school_type_code` | string |  optional  | e.g."4-year college or university"
        `college_employer.*.city` | string |  optional  | e.g."Aalto"
        `college_employer.*.state` | string |  optional  | 
        `college_employer.*.state_value` | string |  optional  | 
        `college_employer.*.zip` | string |  optional  | e.g."FI-00076"
        `college_employer.*.country_code` | integer |  required  | e.g."242"
        `college_employer.*.country_value` | string |  required  | e.g."TWN"
        `college_employer.*.address_line_1` | string |  optional  | e.g."PO Box 21210"
        `college_employer.*.address_line_2` | string |  optional  | 
        `college_employer.*.address_line_3` | string |  optional  | 
        `education_level` | integer |  optional  | question-id-552, e.g.null, 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
        `colleges.*.name` | string |  required  | The min length of 'colleges' is 0 and the max length is 3, e.g."Aalto University"
        `colleges.*.ceeb_code` | integer |  optional  | e.g."1700"
        `colleges.*.school_type_code` | string |  optional  | e.g."4-year college or university"
        `colleges.*.city` | string |  optional  | e.g."Aalto"
        `colleges.*.state` | string |  optional  | 
        `colleges.*.state_value` | string |  optional  | 
        `colleges.*.zip` | string |  optional  | e.g."FI-00076"
        `colleges.*.country_code` | integer |  required  | e.g."242"
        `colleges.*.country_value` | string |  required  | e.g."TWN"
        `colleges.*.address_line_1` | string |  optional  | e.g."PO Box 21210"
        `colleges.*.address_line_2` | string |  optional  | 
        `colleges.*.address_line_3` | string |  optional  | 
        `colleges.*.degrees.*.name` | integer |  required  | The min length of 'colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
        `colleges.*.degrees.*.received_yr` | string |  required  | e.g."2021"
        `siblings.*.first_name` | string |  required  | The min length of 'siblings' is 0 and the max length is 5
        `siblings.*.middle_name` | string |  optional  | 
        `siblings.*.last_name` | string |  required  | 
        `siblings.*.age` | integer |  optional  | 
        `siblings.*.relationship` | integer |  optional  | e.g."", 0:brother 1:sister
        `siblings.*.education_level` | integer |  required  | 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
        `siblings.*.college.*.name` | string |  required  | if "10", "11", "7", "8" or "9" is selected as 'siblings.*.education_level'
        `siblings.*.college.*.ceeb_code` | integer |  optional  | e.g."1700"
        `siblings.*.college.*.school_type_code` | string |  optional  | e.g."4-year college or university"
        `siblings.*.college.*.city` | string |  optional  | e.g."Aalto"
        `siblings.*.college.*.state` | string |  optional  | 
        `siblings.*.college.*.state_value` | string |  optional  | 
        `siblings.*.college.*.zip` | string |  optional  | e.g."FI-00076"
        `siblings.*.college.*.country_code` | integer |  required  | e.g."242"
        `siblings.*.college.*.country_value` | string |  required  | e.g."TWN"
        `siblings.*.college.*.address_line_1` | string |  optional  | e.g."PO Box 21210"
        `siblings.*.college.*.address_line_2` | string |  optional  | 
        `siblings.*.college.*.address_line_3` | string |  optional  | 
        `siblings.*.college.*.degree.*.name` | integer |  optional  | 0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
        `siblings.*.college.*.degree.*.from_month` | string |  optional  | e.g."03/2021"
        `siblings.*.college.*.degree.*.to_month` | string |  optional  | e.g."04/2021"
        `name` | string |  required  | question-id-245
        `ceeb_code` | integer |  optional  | e.g."1700"
        `school_type_code` | string |  required  | e.g."Public" "Charter"
        `city` | string |  optional  | e.g."Aalto"
        `state` | string |  optional  | optional, but required if "0"(USA) is selected as country
        `state_value` | string |  optional  | optional, but required if "0"(USA) is selected as country
        `zip` | string |  optional  | optional, but required if "0"(USA) is selected as country, e.g."FI-00076"
        `country_code` | integer |  required  | e.g."242"
        `country_value` | string |  required  | e.g."TWN"
        `address_line_1` | string |  optional  | e.g."PO Box 21210"
        `address_line_2` | string |  optional  | 
        `address_line_3` | string |  optional  | 
        `entry_month` | string |  required  | e.g."02/2020"
        `is_boarding_high_school` | boolean |  required  | 0:yes 1:no
        `live_on_campus` | boolean |  required  | 0:yes 1:no
        `graduate_from_school` | boolean |  required  | 0:yes 1:no
        `high_school_exit_month` | string |  required  | e.g."02/2020"
        `receive_high_school_equivalency` | boolean |  required  | 0:yes 1:no
        `receive_high_school_equivalency_month` | string |  required  | e.g."02/2020"
        `high_school_descr` | string |  required  | e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
        `progression` | array |  required  | question-id-265, e.g.["1"(Did or will graduate early), "2"(Did or will graduate late), "4"(Did or will take time off), "5"(Did or will take gap year), "7"(No change in progression)]
        `progression_descr` | string |  required  | question-id-836, if one of "1"(Did or will graduate early), "2"(Did or will graduate late), "4"(Did or will take time off) or "5"(Did or will take gap year) is selected in 'progression', minlength:1 maxlength:250
        `other_high_schools.*.name` | string |  required  | 
        `other_high_schools.*.ceeb_code` | integer |  optional  | e.g."1700"
        `other_high_schools.*.school_type_code` | string |  required  | e.g."Public" "Charter"     *
        `other_high_schools.*.city` | string |  optional  | e.g."Aalto"
        `other_high_schools.*.state` | string |  optional  | optional, but required if "0"(USA) is selected as country
        `other_high_schools.*.state_value` | string |  optional  | optional, but required if "0"(USA) is selected as country
        `other_high_schools.*.zip` | string |  optional  | optional, but required if "0"(USA) is selected as country, e.g."38541-6781"
        `other_high_schools.*.country_code` | integer |  required  | e.g."242"
        `other_high_schools.*.country_value` | string |  required  | e.g."TWN"
        `other_high_schools.*.address_line_1` | string |  optional  | e.g."PO Box 21210"
        `other_high_schools.*.address_line_2` | string |  optional  | 
        `other_high_schools.*.address_line_3` | string |  optional  | 
        `other_high_schools.*.from_month` | string |  required  | e.g."04/2021"
        `other_high_schools.*.to_month` | string |  required  | e.g."04/2021"
        `why_leave_other_high_school` | string |  optional  | optional, but required if the length of 'other_high_schools' is larger than 0, e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
        `colleges.*.course_details` | integer |  required  | 6:Dual enrollment with high school 7:Summer program 8:Credit awarded directly by college
        `colleges.*.from_month` | string |  required  | e.g."11/2016"
        `colleges.*.to_month` | string |  required  | e.g."11/2016"
        `colleges.*.degree` | integer |  required  | e.g."", 0:AA 1:AS 2:BA 3:BS
        `graduating_class_size` | string |  required  | 
        `class_rank` | integer |  required  | 1:weighted 2:unweighted
        `year_courses_scheduling_system` | string |  required  | 
        `year_courses.*.title` | string |  required  | 
        `year_courses.*.level` | string |  optional  | 
        `year_courses.*.schedule` | string |  required  | 
        `honors.*.title` | string |  required  | 
        `honors.*.level` | array |  optional  | 
        `honors.*.level_recognition` | array |  optional  | 
        `community_based_organizations.*.organization_name` | string |  required  | 
        `community_based_organizations.*.mentor_prefix` | string |  optional  | 
        `community_based_organizations.*.mentor_first_name` | string |  optional  | 
        `community_based_organizations.*.mentor_last_name` | string |  optional  | 
        `community_based_organizations.*.mentor_email` | string |  optional  | 
        `community_based_organizations.*.mentor_phone` | string |  optional  | 
        `career_interest` | string |  required  | 
        `sats.*.taken_date` | date |  required  | 
        `sats.*.subject` | string |  required  | 
        `sats.*.score` | integer |  optional  | 
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
        `aps.*.score` | integer |  optional  | 
        `ibs.*.taken_date` | date |  required  | 
        `ibs.*.subject` | string |  required  | 
        `ibs.*.level` | string |  required  | 1:high level 0:standard level
        `ibs.*.score` | integer |  optional  | 
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


