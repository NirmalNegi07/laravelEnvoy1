@servers(['local' => 'localhost'])

@task('setup-uat-project_a', ['on' => 'local'])

    echo "Step:1 Move to the destination directory" &&
    cd C:/output-envoy &&

    echo "Step:2 Clone the repositary" &&
    git clone https://github.com/ColoredCow/portal.git  &&

    echo "Step:3 Move into the cloned repository directory" &&
    cd portal  &&

    echo "Step:4 Install the dependencies" &&
    npm install  

@endtask
