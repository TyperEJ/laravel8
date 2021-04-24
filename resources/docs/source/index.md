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
    -d '{"first_name":"iure","middle_name":"perspiciatis","last_name":"facere","suffix":10,"preferred_name":"ab","used_any_other_names":false,"former_first_name":"sed","former_middle_name":"provident","former_last_name":"ea","sex":true,"sex_descr":"reprehenderit","birth_date":"consectetur","address":[{"county":"suscipit","country_code":10,"country_value":"itaque","address_line_1":"voluptas","address_line_2":"iure","address_line_3":"est","city":"et","state":12,"state_value":"alias","zip":"voluptatibus"}],"used_mailing_address":false,"mailing_address":[{"county":"voluptas","country_code":4,"country_value":"id","address_line_1":"ipsam","address_line_2":"consequatur","address_line_3":"qui","city":"cum","state":17,"state_value":"consequatur","zip":"facilis"}],"is_temporary_mailing_address":true,"temporary_mailing_address_from_date":"magni","temporary_mailing_address_to_date":"ea","preferred_phone":true,"preferred_phone_number":[{"country_code":"id","phone_number":"modi","extension":"sit"}],"used_alternate_phone":false,"alternate_phone_number":[{"country_code":"ut","phone_number":"mollitia","extension":"at"}],"religion":6,"religion_descr":"voluptatem","us_armed_forces_status":12,"us_military_anticipated_status":18,"us_military_experiences":[{"branch":5,"from_month":"voluptas","to_month":"dolorum"}],"ever_received_discharge":true,"discharge_descr":"animi","is_hispanic_or_latino":true,"hispanic_or_latino_identities":[],"hispanic_or_latino_descr":"voluptas","other_identities":[],"tribal_identity":"vero","is_federally_recognized_tribe":false,"tribe":1,"tribal_enrollment_number":"assumenda","asian_backgrounds":[],"east_asian_descr":"praesentium","south_asian_descr":"ex","southeast_asian_descr":"quasi","african_american_backgrounds":[],"african_american_descr":"fuga","native_hawaiian_or_other_pacific_islander_backgrounds":[],"native_hawaiian_or_other_pacific_islander_descr":"qui","white_backgrounds":[],"white_descr":[],"agreed_terms_demographics":false,"birth_country":9,"birth_city":"nemo","birth_state":2,"lived_in_us_yr":17,"lived_outside_us_yr":3,"languages":[{"lang":2,"proficiency":[]}],"citizenship_status":18,"ssn_number":"ut","list_citizenship":[],"green_card_file":"quo","arn_number":"ea","arn_expiration_date":"nostrum","hold_us_visa":false,"held_visa":20,"visa_number":"nesciunt","visa_date_issued":"tempora","other_visa_type_descr":"minima","want_to_apply_us_visa":18,"want_to_apply_other_visa_descr":"qui","apply_fee_waiver":true,"fee_waiver_indicators":[],"fee_waiver_signature":"incidunt","want_info_from_strive_for_college":true,"parents_marital_status":9,"divorced_yr":"quia","want_to_list_step_parents":true,"step_parents_number":8,"whom_make_your_permanent_home":11,"living_situation_descr":"in","has_children":true,"children_number":19,"parents":[{"type":14,"is_living":true,"deceased_date":"explicabo","prefix":6,"first_name":"sit","middle_name":"cum","last_name":"est","former_last_name":"sunt","suffix":10,"birth_country":9,"occupation":11,"occupation_descr":"minus","education_level":13,"colleges":[{"name":"ad","ceeb_code":19,"school_type_code":"quia","city":"architecto","state":"quis","state_value":"dolor","zip":"perferendis","country_code":5,"country_value":"sequi","address_line_1":"provident","address_line_2":"explicabo","address_line_3":"provident","degrees":[{"name":20,"received_yr":"aut"}]}]}],"prefix":14,"relationship":"similique","email":"nobis","address_type":20,"occupation":7,"occupation_descr":"ut","employment_status":9,"position":"quia","is_employed_or_retired_college":false,"current_employer_name":"voluptatum","college_employer":[{"name":"nostrum","ceeb_code":6,"school_type_code":"quisquam","city":"dolores","state":"dolores","state_value":"quibusdam","zip":"eaque","country_code":12,"country_value":"voluptates","address_line_1":"dolor","address_line_2":"voluptatem","address_line_3":"sit"}],"education_level":14,"colleges":[{"name":"numquam","ceeb_code":17,"school_type_code":"sapiente","city":"ducimus","state":"inventore","state_value":"placeat","zip":"non","country_code":11,"country_value":"autem","address_line_1":"enim","address_line_2":"autem","address_line_3":"sunt","degrees":[{"name":9,"received_yr":"beatae"}],"course_details":3,"from_month":"fugiat","to_month":"ut","degree":12}],"siblings":[{"first_name":"impedit","middle_name":"aut","last_name":"voluptates","age":16,"relationship":15,"education_level":7,"college":[{"name":"aut","ceeb_code":17,"school_type_code":"illum","city":"ipsum","state":"voluptatem","state_value":"pariatur","zip":"qui","country_code":14,"country_value":"necessitatibus","address_line_1":"quae","address_line_2":"ex","address_line_3":"rerum","degree":[{"name":13,"from_month":"velit","to_month":"at"}]}]}],"name":"eligendi","ceeb_code":1,"school_type_code":"ducimus","city":"aut","state":"ipsa","state_value":"sit","zip":"suscipit","country_code":10,"country_value":"autem","address_line_1":"iure","address_line_2":"voluptatem","address_line_3":"recusandae","entry_month":"libero","is_boarding_high_school":true,"live_on_campus":false,"graduate_from_school":true,"high_school_exit_month":"est","receive_high_school_equivalency":false,"receive_high_school_equivalency_month":"dolores","high_school_descr":"quis","progression":[],"progression_descr":"itaque","other_high_schools":[{"name":"recusandae","ceeb_code":18,"school_type_code":"voluptatem","city":"earum","state":"quia","state_value":"non","zip":"nihil","country_code":8,"country_value":"dolorum","address_line_1":"cum","address_line_2":"autem","address_line_3":"voluptas","from_month":"minus","to_month":"aut"}],"why_leave_other_high_school":"sequi","graduating_class_size":18,"class_rank_reporting":9,"exact_class_rank":1,"decile_rank":13,"quintile_rank":16,"quartile_rank":16,"class_rank_weighting":1,"gpa_scale_reporting":19,"cumulative_gpa":18,"gpa_weighting":9,"courses_scheduling_system":"quia","courses":[{"title":"fugiat","level":3,"schedule":[]}],"honors":[{"title":"dolorum","level":[],"level_recognition":[]}],"community_based_organizations":[{"organization_name":15,"mentor_prefix":"eveniet","mentor_first_name":"quia","mentor_last_name":"enim","mentor_email":"ut","mentor_phone_number":[{"country_code":"corporis","phone_number":"voluptatibus","extension":"quia"}]}],"career_interest":"quod","sats":[{"taken_date":"ut","subject":"quia","score":14}],"acts":[{"taken_date":"consectetur","highest_composite_score":15,"composite_date":"aspernatur","highest_english_score":5,"english_date":"error","highest_math_score":7,"math_date":"sint","highest_reading_score":7,"reading_date":"voluptatem","highest_science_score":1,"science_date":"nam"}],"aps":[{"taken_date":"nulla","subject":"at","score":15}],"ibs":[{"taken_date":"officia","subject":"recusandae","level":"in","score":15}],"toefls":[{"total_score":2,"total_score_date":"quia","highest_reading_score":6,"reading_date":"odio","highest_speaking_score":10,"speaking_date":"veritatis","highest_listening_score":8,"listening_date":"non","highest_writing_score":15,"writing_date":"in"}],"ielts":[{"total_score":17,"total_score_date":"est","highest_reading_score":2,"reading_date":"cum","highest_speaking_score":14,"speaking_date":"quisquam","highest_listening_score":20,"listening_date":"et","highest_writing_score":2,"writing_date":"dolores"}],"activities":[{"type":"et","position_des":"itaque","activity_des":"est","grade_levels":"ipsa","participation_time":[],"hours_spent_per_week":1,"hours_spent_per_year":7,"intend_to_participate":true}]}'

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
    "first_name": "iure",
    "middle_name": "perspiciatis",
    "last_name": "facere",
    "suffix": 10,
    "preferred_name": "ab",
    "used_any_other_names": false,
    "former_first_name": "sed",
    "former_middle_name": "provident",
    "former_last_name": "ea",
    "sex": true,
    "sex_descr": "reprehenderit",
    "birth_date": "consectetur",
    "address": [
        {
            "county": "suscipit",
            "country_code": 10,
            "country_value": "itaque",
            "address_line_1": "voluptas",
            "address_line_2": "iure",
            "address_line_3": "est",
            "city": "et",
            "state": 12,
            "state_value": "alias",
            "zip": "voluptatibus"
        }
    ],
    "used_mailing_address": false,
    "mailing_address": [
        {
            "county": "voluptas",
            "country_code": 4,
            "country_value": "id",
            "address_line_1": "ipsam",
            "address_line_2": "consequatur",
            "address_line_3": "qui",
            "city": "cum",
            "state": 17,
            "state_value": "consequatur",
            "zip": "facilis"
        }
    ],
    "is_temporary_mailing_address": true,
    "temporary_mailing_address_from_date": "magni",
    "temporary_mailing_address_to_date": "ea",
    "preferred_phone": true,
    "preferred_phone_number": [
        {
            "country_code": "id",
            "phone_number": "modi",
            "extension": "sit"
        }
    ],
    "used_alternate_phone": false,
    "alternate_phone_number": [
        {
            "country_code": "ut",
            "phone_number": "mollitia",
            "extension": "at"
        }
    ],
    "religion": 6,
    "religion_descr": "voluptatem",
    "us_armed_forces_status": 12,
    "us_military_anticipated_status": 18,
    "us_military_experiences": [
        {
            "branch": 5,
            "from_month": "voluptas",
            "to_month": "dolorum"
        }
    ],
    "ever_received_discharge": true,
    "discharge_descr": "animi",
    "is_hispanic_or_latino": true,
    "hispanic_or_latino_identities": [],
    "hispanic_or_latino_descr": "voluptas",
    "other_identities": [],
    "tribal_identity": "vero",
    "is_federally_recognized_tribe": false,
    "tribe": 1,
    "tribal_enrollment_number": "assumenda",
    "asian_backgrounds": [],
    "east_asian_descr": "praesentium",
    "south_asian_descr": "ex",
    "southeast_asian_descr": "quasi",
    "african_american_backgrounds": [],
    "african_american_descr": "fuga",
    "native_hawaiian_or_other_pacific_islander_backgrounds": [],
    "native_hawaiian_or_other_pacific_islander_descr": "qui",
    "white_backgrounds": [],
    "white_descr": [],
    "agreed_terms_demographics": false,
    "birth_country": 9,
    "birth_city": "nemo",
    "birth_state": 2,
    "lived_in_us_yr": 17,
    "lived_outside_us_yr": 3,
    "languages": [
        {
            "lang": 2,
            "proficiency": []
        }
    ],
    "citizenship_status": 18,
    "ssn_number": "ut",
    "list_citizenship": [],
    "green_card_file": "quo",
    "arn_number": "ea",
    "arn_expiration_date": "nostrum",
    "hold_us_visa": false,
    "held_visa": 20,
    "visa_number": "nesciunt",
    "visa_date_issued": "tempora",
    "other_visa_type_descr": "minima",
    "want_to_apply_us_visa": 18,
    "want_to_apply_other_visa_descr": "qui",
    "apply_fee_waiver": true,
    "fee_waiver_indicators": [],
    "fee_waiver_signature": "incidunt",
    "want_info_from_strive_for_college": true,
    "parents_marital_status": 9,
    "divorced_yr": "quia",
    "want_to_list_step_parents": true,
    "step_parents_number": 8,
    "whom_make_your_permanent_home": 11,
    "living_situation_descr": "in",
    "has_children": true,
    "children_number": 19,
    "parents": [
        {
            "type": 14,
            "is_living": true,
            "deceased_date": "explicabo",
            "prefix": 6,
            "first_name": "sit",
            "middle_name": "cum",
            "last_name": "est",
            "former_last_name": "sunt",
            "suffix": 10,
            "birth_country": 9,
            "occupation": 11,
            "occupation_descr": "minus",
            "education_level": 13,
            "colleges": [
                {
                    "name": "ad",
                    "ceeb_code": 19,
                    "school_type_code": "quia",
                    "city": "architecto",
                    "state": "quis",
                    "state_value": "dolor",
                    "zip": "perferendis",
                    "country_code": 5,
                    "country_value": "sequi",
                    "address_line_1": "provident",
                    "address_line_2": "explicabo",
                    "address_line_3": "provident",
                    "degrees": [
                        {
                            "name": 20,
                            "received_yr": "aut"
                        }
                    ]
                }
            ]
        }
    ],
    "prefix": 14,
    "relationship": "similique",
    "email": "nobis",
    "address_type": 20,
    "occupation": 7,
    "occupation_descr": "ut",
    "employment_status": 9,
    "position": "quia",
    "is_employed_or_retired_college": false,
    "current_employer_name": "voluptatum",
    "college_employer": [
        {
            "name": "nostrum",
            "ceeb_code": 6,
            "school_type_code": "quisquam",
            "city": "dolores",
            "state": "dolores",
            "state_value": "quibusdam",
            "zip": "eaque",
            "country_code": 12,
            "country_value": "voluptates",
            "address_line_1": "dolor",
            "address_line_2": "voluptatem",
            "address_line_3": "sit"
        }
    ],
    "education_level": 14,
    "colleges": [
        {
            "name": "numquam",
            "ceeb_code": 17,
            "school_type_code": "sapiente",
            "city": "ducimus",
            "state": "inventore",
            "state_value": "placeat",
            "zip": "non",
            "country_code": 11,
            "country_value": "autem",
            "address_line_1": "enim",
            "address_line_2": "autem",
            "address_line_3": "sunt",
            "degrees": [
                {
                    "name": 9,
                    "received_yr": "beatae"
                }
            ],
            "course_details": 3,
            "from_month": "fugiat",
            "to_month": "ut",
            "degree": 12
        }
    ],
    "siblings": [
        {
            "first_name": "impedit",
            "middle_name": "aut",
            "last_name": "voluptates",
            "age": 16,
            "relationship": 15,
            "education_level": 7,
            "college": [
                {
                    "name": "aut",
                    "ceeb_code": 17,
                    "school_type_code": "illum",
                    "city": "ipsum",
                    "state": "voluptatem",
                    "state_value": "pariatur",
                    "zip": "qui",
                    "country_code": 14,
                    "country_value": "necessitatibus",
                    "address_line_1": "quae",
                    "address_line_2": "ex",
                    "address_line_3": "rerum",
                    "degree": [
                        {
                            "name": 13,
                            "from_month": "velit",
                            "to_month": "at"
                        }
                    ]
                }
            ]
        }
    ],
    "name": "eligendi",
    "ceeb_code": 1,
    "school_type_code": "ducimus",
    "city": "aut",
    "state": "ipsa",
    "state_value": "sit",
    "zip": "suscipit",
    "country_code": 10,
    "country_value": "autem",
    "address_line_1": "iure",
    "address_line_2": "voluptatem",
    "address_line_3": "recusandae",
    "entry_month": "libero",
    "is_boarding_high_school": true,
    "live_on_campus": false,
    "graduate_from_school": true,
    "high_school_exit_month": "est",
    "receive_high_school_equivalency": false,
    "receive_high_school_equivalency_month": "dolores",
    "high_school_descr": "quis",
    "progression": [],
    "progression_descr": "itaque",
    "other_high_schools": [
        {
            "name": "recusandae",
            "ceeb_code": 18,
            "school_type_code": "voluptatem",
            "city": "earum",
            "state": "quia",
            "state_value": "non",
            "zip": "nihil",
            "country_code": 8,
            "country_value": "dolorum",
            "address_line_1": "cum",
            "address_line_2": "autem",
            "address_line_3": "voluptas",
            "from_month": "minus",
            "to_month": "aut"
        }
    ],
    "why_leave_other_high_school": "sequi",
    "graduating_class_size": 18,
    "class_rank_reporting": 9,
    "exact_class_rank": 1,
    "decile_rank": 13,
    "quintile_rank": 16,
    "quartile_rank": 16,
    "class_rank_weighting": 1,
    "gpa_scale_reporting": 19,
    "cumulative_gpa": 18,
    "gpa_weighting": 9,
    "courses_scheduling_system": "quia",
    "courses": [
        {
            "title": "fugiat",
            "level": 3,
            "schedule": []
        }
    ],
    "honors": [
        {
            "title": "dolorum",
            "level": [],
            "level_recognition": []
        }
    ],
    "community_based_organizations": [
        {
            "organization_name": 15,
            "mentor_prefix": "eveniet",
            "mentor_first_name": "quia",
            "mentor_last_name": "enim",
            "mentor_email": "ut",
            "mentor_phone_number": [
                {
                    "country_code": "corporis",
                    "phone_number": "voluptatibus",
                    "extension": "quia"
                }
            ]
        }
    ],
    "career_interest": "quod",
    "sats": [
        {
            "taken_date": "ut",
            "subject": "quia",
            "score": 14
        }
    ],
    "acts": [
        {
            "taken_date": "consectetur",
            "highest_composite_score": 15,
            "composite_date": "aspernatur",
            "highest_english_score": 5,
            "english_date": "error",
            "highest_math_score": 7,
            "math_date": "sint",
            "highest_reading_score": 7,
            "reading_date": "voluptatem",
            "highest_science_score": 1,
            "science_date": "nam"
        }
    ],
    "aps": [
        {
            "taken_date": "nulla",
            "subject": "at",
            "score": 15
        }
    ],
    "ibs": [
        {
            "taken_date": "officia",
            "subject": "recusandae",
            "level": "in",
            "score": 15
        }
    ],
    "toefls": [
        {
            "total_score": 2,
            "total_score_date": "quia",
            "highest_reading_score": 6,
            "reading_date": "odio",
            "highest_speaking_score": 10,
            "speaking_date": "veritatis",
            "highest_listening_score": 8,
            "listening_date": "non",
            "highest_writing_score": 15,
            "writing_date": "in"
        }
    ],
    "ielts": [
        {
            "total_score": 17,
            "total_score_date": "est",
            "highest_reading_score": 2,
            "reading_date": "cum",
            "highest_speaking_score": 14,
            "speaking_date": "quisquam",
            "highest_listening_score": 20,
            "listening_date": "et",
            "highest_writing_score": 2,
            "writing_date": "dolores"
        }
    ],
    "activities": [
        {
            "type": "et",
            "position_des": "itaque",
            "activity_des": "est",
            "grade_levels": "ipsa",
            "participation_time": [],
            "hours_spent_per_week": 1,
            "hours_spent_per_year": 7,
            "intend_to_participate": true
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
        `graduating_class_size` | integer |  required  | question-id-303
        `class_rank_reporting` | integer |  optional  | question-id-297, e.g."", 1:Exact 2:Decile 3:Quintile 4:Quartile 5:None
        `exact_class_rank` | integer |  required  | question-id-298, if "1"(Exact) is selected in 'class_rank_reporting'
        `decile_rank` | integer |  required  | question-id-299, if "2"(Decile) is selected in 'class_rank_reporting', e.g.1:Top 10% 2:Top 20% 3:Top 30% 4:Top 40% 5:Top 50% 6:Top 60% 7:Top 70% 8:Top 80% 9:Top 90% 10:Top 100%
        `quintile_rank` | integer |  required  | question-id-300, if "3"(Quintile) is selected in 'class_rank_reporting', e.g.1:Top 20% 2:Top 40% 3:Top 60% 4:Top 80% 5:Top 100%
        `quartile_rank` | integer |  required  | question-id-301, if "4"(Quartile) is selected in 'class_rank_reporting', e.g.1:Top 25% 2:Top 50% 3:Top 75% 4:Top 100%
        `class_rank_weighting` | integer |  required  | if "1"(Exact), "2"(Decile), "3'(Quintile) or "4"(Quartile) is selected in 'class_rank_reporting', e.g.1:weighted 2:unweighted
        `gpa_scale_reporting` | integer |  optional  | e.g.from 4 to 20, 100, 200:None
        `cumulative_gpa` | integer |  optional  | optional, but required if "200"(None) is NOT selected in 'gpa_scale_reporting'
        `gpa_weighting` | integer |  optional  | question-id-306, e.g."", 1:weighted 2:unweighted
        `courses_scheduling_system` | string |  required  | question-id-1803, e.g."Semester", "Trimester", "Quarter"
        `courses.*.title` | string |  required  | question-id-308
        `courses.*.level` | integer |  optional  | question-id-309, e.g.1:Regular/Standard 0:Accelerated 9:Advanced 2:Advanced Placement (AP) 3:AS/A-level/International A-level, Cambridge AICE  8:College Prep
        `courses.*.schedule` | array |  required  | question-id-311, noticed that the options are related to the value selected in 'courses_scheduling_system' and other options couldn't be selected at the same time if "0"(Full Year) is selected in 'schedule', e.g.["0"(Full Year)], ["2"(First Trimester), "4"(Second Trimester), "5"(Third Trimester)], ["9"(Fourth Quarter)]
        `honors.*.title` | string |  required  | the length of 'honors' is 4
        `honors.*.level` | array |  optional  | e.g.0:9 1:10 2:11 3:12 4:Post-graduate
        `honors.*.level_recognition` | array |  optional  | e.g.0:School 1:State/Regional 2:National 3:International
        `community_based_organizations.*.organization_name` | integer |  required  | 0:100 Black Men 102:Achieve Program 616:Achieving Collegiate Excellence and Success (ACES) 286:Building STEPS
        `community_based_organizations.*.mentor_prefix` | string |  optional  | question-id-290, e.g.0:Dr. 1:Mr. 2:Ms.
        `community_based_organizations.*.mentor_first_name` | string |  optional  | question-id-291
        `community_based_organizations.*.mentor_last_name` | string |  optional  | 
        `community_based_organizations.*.mentor_email` | string |  optional  | community_based_organizations.*.mentor_phone_number question-id-296, e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
        `community_based_organizations.*.mentor_phone_number.*.country_code` | string |  optional  | e.g.null, "+886"
        `community_based_organizations.*.mentor_phone_number.*.phone_number` | string |  optional  | e.g."970824452"
        `community_based_organizations.*.mentor_phone_number.*.extension` | string |  optional  | 
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


