# Simple Input
simple input php for get info (get,post,delete,put)

[![Build Status](https://travis-ci.org/carlosocarvalho/simple-input.svg?branch=1.0.2)](https://travis-ci.org/carlosocarvalho/simple-input)
[![Latest Stable Version](https://poser.pugx.org/carlosocarvalho/simple-input/v/stable)](https://packagist.org/packages/carlosocarvalho/simple-input) [![Total Downloads](https://poser.pugx.org/carlosocarvalho/simple-input/downloads)](https://packagist.org/packages/carlosocarvalho/simple-input) [![Latest Unstable Version](https://poser.pugx.org/carlosocarvalho/simple-input/v/unstable)](https://packagist.org/packages/carlosocarvalho/simple-input) [![License](https://poser.pugx.org/carlosocarvalho/simple-input/license)](https://packagist.org/packages/carlosocarvalho/simple-input)[![Coverage Status](https://coveralls.io/repos/carlosocarvalho/simple-input/badge.svg)](https://coveralls.io/r/carlosocarvalho/simple-input)



##Install
Via composer

### Example Use
> <?php
>
>use Carlosocarvalho\SimpleInput\Input\Input;
>

sending data post|get|put|delete

> $post = Input::post('key');

> $post_all =  Input::post();

> $get = Input::get('key');

> $get_all =  Input::get();

#### Important sending form method post with php, use input hidden[name="_method" value="put|delete"]
> $put = Input::put('key');

> $put_all = Input::put();

> $delete = Input::delete('key');

> $delete_all = Input::delete();



