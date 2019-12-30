<?php

return [
    'alipay' => [
        'app_id'         => '2016101800718748',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoLCE1D3RhoxlzQV59CSv1KwfSuZxgTT/uxT0zfo80cvhhawjZrj74BnBMjGyTc55o2oxijz9nXAPjKqjIkIoD8RYOdWyF0PAxoqJ6yHokFg8XmmWd7lgBn0a395I86vmZknzbQIQu6fAlyV36011jOXYROBvcF2Qyw780mGU6louAPmVFcqHqfk+sc3y0tTLQi0BVUVBR0iR1KFqeleBli48M7SJATAA5TYbgPSUv8E6YKfU+0uRCOFrXAVdsmDu1p2oSQTguExlPmOhXadU36KcjkgCAoqpqIzEqrGfCSHWXQe4pvy+KOlaiiU4jyDkNOziSMuqdbRXPsNxejzcLwIDAQAB',
        'private_key'    => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC8/+s6A5wsKhkisiu4gh+d7sGbcw7OH39/q7sHTl27MyfYXF6Tu5DOqWR77udibTiMrlddRvQLC0q/DkOlrG/+qFqbChgV05xMEdyOqsjSrB7siPZwEtFpFHyerTXivSJJ6cIjUJAsFHHJJ75dm3iGa4AexIzW2pD00OZFAV7LZ28O9VWGf9NMcwQo80oBbGyAlZ1OxuS6zj3+La34h2b722Iwk3X+WwF4WLPxVuLZoh/HyF77DvjmhC0FNE9gRyxc9pl0kpfAvt5Hm7L5eOTyQk5SGz6tD6vGQwoe1zOyy8eeHBbuvz2+K1SEODR9ap0bfRPVURoQcTsfYqryTyxRAgMBAAECggEAfsTRTCpbuCvMjD8hoDJ3boFUjyXPimYKKOJRIodny0Z2tWLPdRvb9yIbah1GSfikc4gExWXwDvBWBGxW52sP+6mEjHVqzkkPjt50J6VZ6iTU4SbE1Utp9qdtJyla+WiO9TC7rOA+s7JK1/e2cibz4oV8fCatqPcVP4BW03Yl1Ru1SHJdHI7JE93F/fqVWf543td2nRwC2HYfo81rgT9WHx48xZLMNei6wfFFz2ZSS3WdNAnLrNdf4LputBhwcupBrSFCYv37Yn2V3UHgJxqAZ+JFCU3PNHDjH7FHNpw1voITG50DyyClVwp+qoN8vnYxUPTGPkN5eLLDRKAozrdHgQKBgQDxJaPhaotDZgIBBSzCd3hz0YI47jeZ3pmhhSzaxUf+SIR7HYT1dqDjgNsSoD27HBTBrMWk47O5f+QLdNYeMqyaX9NxyWrcjLg9XY6u2pUH+0lmRnDLIeeLldy5VZ7JkPQlmZt44dyYf82oEeEtwPj7tHylOVtIwm5Sd3ocvn4fGQKBgQDIpAeElcPppuBOBdmKwwnRKwDFXMhFrJ6yJikATpdQ8tzcaA0DMAEdwNE5vlPcPiQVB/8DVqqBLHHM/Q46ncnJJKnWbQl7BdmBEKznjiqT7sq1CDaXQ9O4DqSW4ZcbRknQvMnEW6qVW7fxfK6Yren8Ngj/ZJzv7MnZFjahwOD1+QKBgQDfvxT3qmvc9WEWoT6OkVtp2xMAz8c3NZtGitK7iiDqh06lDRa4yoEtlfmupo+gdMWtjik0fTHdBBULrDSfgFU2R4NhKInGaarpBU3GX3m4FihchS9SyvqUQVCzhgX28FAYMxZWavrLZInlT/GnCk36/dRJWZahRAYo7kKXOQi8wQKBgQCykHk4YGmJisDZ747aVhZol5MKEzcR+z0JY7jd0xQMMPirF9ds3M5BgpcygtbzjkJijUlB2WHJsJpfS1/cfw1U/FJCyavEV0JqAUNAmV//ZGf3kaW0HeNRTYbh2Ue4OGf9Y+dV4BcC8ivUuZhRvYYetqBvW0XoqZ5Cm+hnMNeFUQKBgG03jnaKL4AIrTMnor2U5pzz0J0kOMN+88b4Teblm7UWwvyUPielLLkDT0pg/E4zMmxV5IWwFQSpEes0cLTq9LfLmxHeDYF/2JV2sPSM/d1oYhxUOhX//D/zB4mEZ7YQVCRsU3mMuTR5lUOvAV506+iesnPeGnrRLEfxciR2Lbgk',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
