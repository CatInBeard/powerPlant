<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть заполнен.',
    'accepted_if' => ':attribute должен быть заполнен если :other равен :value.',
    'active_url' => ':attribute не является корректным адресом.',
    'after' => ':attribute должен быть после :date.',
    'after_or_equal' => ':attribute должен быть после или равен :date.',
    'alpha' => ':attribute должен содержать только буквы.',
    'alpha_dash' => ':attribute должен содержать буквы, цифры, тиры и нижнее подчёркивания.',
    'alpha_num' => ':attribute должен содержать только буквы и цифры.',
    'array' => ':attribute Должен быть массивом.',
    'before' => ':attribute должен быть раньше :date.',
    'before_or_equal' => ':attribute должен быть раньше или равен :date.',
    'between' => [
        'array' => ':attribute должен быть между :min и :max элементами.',
        'file' => ':attribute должен быть между :min и :max Kb.',
        'numeric' => ':attribute должен быть между :min и :max.',
        'string' => ':attribute должен содержать от :min до :max символов.',
    ],
    'boolean' => ':attribute должен быть TRUE или FALSE.',
    'confirmed' => ':attribute не совпадает.',
    'current_password' => 'Неверный пароль.',
    'date' => ':attribute не является датой.',
    'date_equals' => ':attribute должен быть равен :date.',
    'date_format' => ':attribute имеет некорретный формат, используйте :format.',
    'declined' => ':attribute должен быть откланён.',
    'declined_if' => ':attribute должен быть откланён когда :other равен :value.',
    'different' => ':attribute и :other должны отличаться.',
    'digits' => ':attribute должен содержать цифры: :digits.',
    'digits_between' => ':attribute должен быть между :min и :max.',
    'dimensions' => ':attribute имеет недопустимый размер.',
    'distinct' => ':attribute уже занят.',
    'email' => ':attribute должен быть корректным email-адресом.',
    'ends_with' => ':attribute должен заканчиваться на: :values.',
    'enum' => ':attribute не корректен.',
    'exists' => ':attribute не корректен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => ':attribute необходимо заполнить.',
    'gt' => [
        'array' => ':attribute должен содержать больше :value элементов.',
        'file' => ':attribute должен быть больще :value Kb.',
        'numeric' => ':attribute должен быть больше :value.',
        'string' => ':attribute должно содержать больше :value символов.',
    ],
    'gte' => [
        'array' => ':attribute должен содержать :value элементов или больше.',
        'file' => ':attribute должен быть больше или равен :value Kb.',
        'numeric' => ':attribute должен быть больше или равен :value.',
        'string' => ':attribute должен содержать :value символов или больше.',
    ],
    'image' => ':attribute должен быть картинкой.',
    'in' => 'Выбранный :attribute не корректен.',
    'in_array' => ':attribute не входит в :other.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть корреткным IP адресом.',
    'ipv4' => ':attribute должен быть корреткным IPv4 адресом.',
    'ipv6' => ':attribute должен быть корреткным IPv6 адресом.',
    'json' => ':attribute должен быть корреткным JSON.',
    'lt' => [
        'array' => ':attribute должен содержать меньше :value элементов.',
        'file' => ':attribute должен быть меньше :value Kb.',
        'numeric' => ':attribute должен быть меньше :value.',
        'string' => ':attribute должна содержать меньше :value символов.',
    ],
    'lte' => [
        'array' => ':attribute должен содержать :value элементов или меньше.',
        'file' => ':attribute должен быть :value Kb или меньше.',
        'numeric' => ':attribute должен быть меньше или равен :value.',
        'string' => ':attribute должен содержать :value или меньще символов.',
    ],
    'mac_address' => ':attribute должен быть корректным MAC адресом.',
    'max' => [
        'array' => ':attribute должен сожержать не больше :max элементов.',
        'file' => ':attribute должен быть не больше :max Kb.',
        'numeric' => ':attribute должен быть не больше :max.',
        'string' => ':attribute должен содержать не больше :max символов.',
    ],
    'mimes' => ':attribute должен быть типа: :values.',
    'mimetypes' => ':attribute должен быть типа: :values.',
    'min' => [
        'array' => ':attribute должен содержать не меньше :min элементов.',
        'file' => ':attribute должен быть не меньше :min Kb.',
        'numeric' => ':attribute должен быть не меньше :min.',
        'string' => ':attribute должен быть не короче :min символов.',
    ],
    'multiple_of' => ':attribute должен быть кратен :value.',
    'not_in' => 'Выбранный :attribute не корректен.',
    'not_regex' => ':attribute имеет некорректный формат.',
    'numeric' => ':attribute должен быть числом.',
    'password' => [
        'letters' => ':attribute должен содержать не менее одного символа.',
        'mixed' => ':attribute должен содержать строчные и заглавные буквы.',
        'numbers' => ':attribute должен сожержать не менее одной цифры.',
        'symbols' => ':attribute должен содержать как минимум одну букву.',
        'uncompromised' => ':attribute был обнаружен в базе утекших паролей. Пожалуйста выберите другой :attribute.',
    ],
    'present' => ':attribute должен присутствовать.',
    'prohibited' => ':attribute запрещён.',
    'prohibited_if' => ':attribute запрещён, если :other равен :value.',
    'prohibited_unless' => ':attribute запрещён пока :other не равен :values.',
    'prohibits' => ':attribute запрещено, если :other присутсвует.',
    'regex' => ':attribute имеет некорректный формат.',
    'required' => ':attribute должно быть заполнено.',
    'required_array_keys' => ':attribute должно содержать: :values.',
    'required_if' => ':attribute необходимо заполнить, если :other равен :value.',
    'required_unless' => ':attribute обязательно пока :other не равен :values.',
    'required_with' => ':attribute необходимо, если существует :values.',
    'required_with_all' => ':attribute, если существует :values.',
    'required_without' => ':attribute необходимо, если :values не существует.',
    'required_without_all' => ':attribute необходимо, если нет :values.',
    'same' => ':attribute должен совпадать с :other.',
    'size' => [
        'array' => ':attributeдолжен содержать :size элементов.',
        'file' => ':attribute должен быть ровно :size kb.',
        'numeric' => ':attribute должен равняться :size.',
        'string' => ':attribute должен содержать :size символов.',
    ],
    'starts_with' => ':attribute должен начинаться с: :values.',
    'doesnt_start_with' => ':attribute не должен начинаться с: :values.',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть корректной временной зоной.',
    'unique' => ':attribute занят.',
    'uploaded' => 'не удалось загрузить :attribute.',
    'url' => ':attribute должен быть корректным URL.',
    'uuid' => ':attribute должен быть корреткным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
