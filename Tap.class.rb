class Tap
    def initialize(r = true)
        @pressure = 0;
       
        say("I'm a tap!")
 
        run if r
    end
 
    def decrease_pressure
        @pressure /= 1.25
 
        stop if @pressure == 0
    end
 
    def increase_pressure
        @pressure *= 1.25
 
        explode if @pressure > 20
    end
 
    def run
        if @pressure == 0 then
            @pressure = 4
 
            say('Catch me if you can!')
        else
            say("I'm already running!")
        end
    end
 
    def stop
        if @pressure == 0 then
            say("I'm not running!")
        else
            @pressure = 0;
 
            say("I have stopped!")
        end
    end
 
    def explode
        say('Bang!')
    end
 
    def say(str)
        puts("Tap: #{str}")
    end
end
