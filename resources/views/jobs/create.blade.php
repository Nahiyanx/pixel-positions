<x-layout>

    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">

        <x-forms.input label="Title" name="title" placeholder="Web Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />


        <x-forms.select label="Schedule" name="schedule">
            <option class="text-gray-400">Full Time</option>
            <option class="text-gray-400">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider /> 

        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="video, frontend, backend"/>

        <x-forms.button>Publish</x-forms.button>


    </x-forms.form>

</x-layout>