<?php

use Lydenn\Punkhazard\Models\Country;

test('expect country to have name slug and code', function () {
    $country = Country::factory()->create([
        'name' => 'Cambodia',
        'slug' => 'cambodia',
        'code' => 'kh'
    ]);

    expect($country->name)->toEqual('Cambodia');
    expect($country->slug)->toEqual('cambodia');
    expect($country->code)->toEqual('kh');
});
