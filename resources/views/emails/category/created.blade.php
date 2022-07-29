@component('mail::message')
# A New Category has been cretead by this name {{ $category->name }}

Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nam nihil voluptatibus labore itaque ea harum rerum fuga corporis earum natus quisquam expedita rem soluta maiores iure, quis beatae placeat.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto a adipisci quaerat laboriosam impedit eius possimus magni deserunt aliquam ducimus nisi unde quisquam beatae, maxime perferendis nam tempora assumenda ad!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam amet earum doloribus voluptate tenetur cumque quae sunt provident iure! Quam commodi magni quibusdam eius illum aut nulla quos quas ipsum?
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut iste cumque, tempora voluptas modi, sunt, a aliquid necessitatibus dolores deserunt perspiciatis minus! Nemo vel harum ullam praesentium atque nesciunt voluptates.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque facilis atque dicta architecto ducimus cupiditate consequuntur repudiandae molestiae. Vel magnam consequuntur aliquam nobis cumque nemo nostrum dignissimos unde quas cum.

@component('mail::button', ['url' => route('category.show', $category->id), 'color' => 'success' ])
View New Category
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
