@servers(['local' => 'localhost'])
@setup
    $envValues = [
        'APP_NAME' => 'ColoredCow Portal Test',
        'APP_ENV' => 'local',
        'APP_DEBUG' => 'false',
        'APP_URL' => 'http://portal.test',
    ];
    $envFile = 'C:/output-envoy/portal/.env';

@endsetup


@task('setup-uat-project_a', ['on' => 'local'])

@setup
    // $localFolderPath = $localFolderPath ; // Use a default value or set it to a placeholder if not provided
@endsetup

echo "Step:1 Move to the destination directory" &&
cd C:/output-envoy &&
{{-- cd {{$localFolderPath}} && --}}

echo "Step:2 Clone the repositary" &&
git clone https://github.com/ColoredCow/portal.git &&

echo "Step:3 Move into the cloned repository directory" &&
    cd portal &&

    echo "Step:4 Install the dependencies" &&
    composer update &&
    composer install &&
    npm install &&
    
    echo "npm build" &&
    npm cache clear --force &&
    npm run dev &&
    
    echo "Make a copy of the .env.example file in the same directory and save it as .env" &&
    cp .env.example .env &&

    echo "Run the following command to add the Laravel application key:" &&
    php artisan key:generate &&

    echo "Updating env variables" &&
    @php
        function updateEnvVariable($key, $value, $file)
        {
            echo $key;
            echo $value;
        }
        @endphp

    @foreach ($envValues as $key => $value)
        @php
            updateEnvVariable($key, $value, $envFile);
        @endphp
    @endforeach
@endtask
