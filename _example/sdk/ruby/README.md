CarInformationApi
=================
This API SDK was automatically generated by APIMATIC BETA v2.0

How To Configure:
=================
The generated code might need to be configured with your API credentials. To do that,
open the file "configuration.rb" and edit it's contents.

How To Build: 
=============
The generated code uses a Ruby gem namely 'unirest'. The reference to this gem is
already added in the gemspec. Therefore, you will need internet access to resolve
this dependency.

How To Use:
===========
The generated code can be used to build gem, which can then be distributed online.
Otherwise, you can include the generated code in your project to use directly.

Use the following steps to build a gem and use locally

    1. Run the build command
        ```
        gem build car_information_api.gemspec
        ```

    2. Run the install command  
        ```
        gem install ./car_information_api-1.0.gem
        ```

    3. In your Gemfile add this line
        ```
        gem 'car_information_api', '~> 1.0'
        ```

    4. Now create an instance and use the instance methods, like following.

        ```
        ctl = Group1Controller.new
        ctl._get_car_info params
        ```
