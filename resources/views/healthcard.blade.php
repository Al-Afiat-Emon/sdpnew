<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>

                    
                    Your name is: {{Auth::user()->name}} <br>
                    Your email addrress: {{Auth::user()->email}}
               
<x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="cardmaking">
            @csrf

            
            <div>
                <x-label for="bloodtype" :value="__('bloodtype')" />

                <x-input id="bloodtype" class="block mt-1 w-full" type="string" name="bloodtype"  required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="age" :value="__('age')" />

                <x-input id="age" class="block mt-1 w-full" type="integer" name="age" />
            </div>

            <div class="mt-4">
                <x-label for="health_history" :value="__('health_history')" />

                <x-input id="health_history" class="block mt-1 w-full" type="text" name="health_history" />
            </div>

            </div>
            <button type="submit">Make Card</button>

            </form>
