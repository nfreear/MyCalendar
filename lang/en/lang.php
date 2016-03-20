<?php
return [
    'plugin' => [//Plugin File
        'name' => 'MyCalendar',
        'description' => 'Super simple calendar for displaying events.',
        'user_btn' => 'Users',
        'tab' => 'MyCalendar',
        'access_events' => 'events',
        'access_categories' => 'categories',
        'access_occurrences' => 'occurrences',
        'access_settings' => 'settings',
    ],
    'events' => [// Events Controller
        'menu_label' => 'Events',
        'toolbar_new' => 'New Event',
        'form_name' => 'Event',
        'update_title' => 'Edit Event',
        'preview_title' => 'Preview Event',
        'list_title' => 'Manage Events',
        'return' => 'Return to Events list',
        'delete_confirm' => 'Do you really want to delete this event?',
    ],
    'categories' => [// Categories Controller
        'menu_label' => 'Categories',
        'toolbar_new' => 'New Category',
        'form_name' => 'Category',
        'create_title' => 'Create Category',
        'update_title' => 'Edit Category',
        'preview_title' => 'Preview Category',
        'list_title' => 'Manage Categories',
        'return' => 'Return to categories list',
        'delete_confirm' => 'Do you really want to delete this category?',
    ],
    'occurrences' => [// Occurrences Controller
        'menu_label' => 'Occurrences',
        'toolbar_new' => 'New Occurrence',
        'form_name' => 'Occurrence',
        'create_title' => 'Create Occurrence',
        'update_title' => 'Edit Occurrence',
        'preview_title' => 'Preview Occurrence',
        'list_title' => 'Manage Occurrence',
        'return' => 'Return to occurrences list',
        'delete_confirm' => 'Do you really want to delete this occurrence?',
    ],
    'settings' => [
        'description' => 'Configure calendar category protection.',
        'menu_label' => 'MyCalendar settings',
        'menu_description' => 'Manage calendar settings.',
        'public_perm_label' => 'Public Category',
        'public_perm_comment' => 'A permission for categories that will NOT be blocked from public viewing.',
        'deny_perm_label' => 'Denied Category',
        'deny_perm_comment' => 'A permission for categories that WILL be blocked from any viewing.',
        'default_perm_label' => 'Default Category',
        'default_perm_comment' => 'A permission that will be set on new categories by default ( unless set by user ).',
        'date_format_label' => 'Date Format',
        'date_format_comment' => 'Format to use for display of date.  Uses standard PHP date format string',
        'time_format_label' => 'Time Format',
        'time_format_comment' => 'Format to use for display of time.  Uses standard PHP date format string',
        'day_start_label' => 'Day Start Time',
        'day_start_comment' => 'When do you want the morning begin for "All Day" events (default is 24:00)',
        'day_end_label' => 'Day End Time',
        'day_end_comment' => 'When do you want the night to end for "All Day" events (default is 23:59)',
        'default_length_label' => 'Default Event Length',
        'default_length_comment' => 'Default time an event will last when created (default is 01:00)',

        'section_categories_label' => 'Category Defaults',
        'section_categories_comment' => 'Default categories for events and permissions',

        'section_formats_label' => 'Default Formats',
        'section_formats_comment' => 'Default time and date formats',

        'section_times_label' => 'Default Times / Dates',
        'section_times_comment' => 'Default times and dates for event creation and display',
    ],
    'month' => [// Month Component
        'name' => 'Month View',
        'description' => 'Shows a month calendar with events',
        'month_title' => 'Month',
        'month_description' => 'The month you want to show.',
        'year_title' => 'Year',
        'year_description' => 'The year you want to show.',
        'events_title' => 'Events',
        'events_description' => 'Array of the events you want to show.',
        'color_title' => 'Calendar Color',
        'color_description' => 'What color do you want calendar to be?',
        'dayprops_title' => 'Day Properties',
        'dayprops_description' => 'Array of the properties you want to put on the day indicator.',
        'loadstyle_title' => 'Load Style Sheet',
        'loadstyle_description' => 'Load the default CSS file.',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
        'color_red' => 'red',
        'color_green' => 'green',
        'color_blue' => 'blue',
        'color_yellow' => 'yellow',
        'day_sun' => 'Sun',
        'day_mon' => 'Mon',
        'day_tue' => 'Tue',
        'day_wed' => 'Wed',
        'day_thu' => 'Thu',
        'day_fri' => 'Fri',
        'day_sat' => 'Sat',
        'previous' => 'Previous',
        'next' => 'Next',
    ],
    'week' => [// Week Component
        'name' => 'Week View',
        'description' => 'Shows a week calendar with events',
    ],
    'evlist' => [// EvList Component
        'name' => 'List View',
        'description' => 'Shows a list of events',
        'month_title' => 'Month',
        'month_description' => 'The month you want to show.',
        'year_title' => 'Year',
        'year_description' => 'The year you want to show.',
        'events_title' => 'Events',
        'events_description' => 'Array of the events you want to show.',
        'color_title' => 'Icon Color',
        'color_description' => 'What color do you want calendar icons to be?',
        'loadstyle_title' => 'Load Style Sheet',
        'loadstyle_description' => 'Load the default CSS file.',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
        'label' => 'Event',
        'id' => 'ID',
        'title' => 'Title',
        'is_published' => 'Published',
        'user_id' => 'Creator',
        'fname' => 'Creator First',
        'lname' => 'Creator Last',
        'date' => 'Date',
        'time' => 'Time',
        'text' => 'Details',
        'link' => 'Link',
        'categorys' => 'Categories',
    ],
    'events_comp' => [// Events Component
        'name' => 'Events Data',
        'description' => 'Get Events from DB and insert them into page',
        'linkpage_title' => 'Link to Event Detail Page',
        'linkpage_desc' => 'Name of the event page file for the "More Details" links. This property is used by the event component partial.',
        'linkpage_group' => 'Links',
        'linkpage_opt_none' => 'None - Use Modal Pop-up',
        'title_max_title' => 'Maximum Popup Title Length',
        'title_max_description' => 'Maximum length of "title" property that shows the details of an event on hover.',
        'permissions_title' => 'Use Permission',
        'permissions_description' => 'Use permissions to restrict what categories of events are shown based on user groups.',
        'past_title' => 'Past Days',
        'past_description' => 'How far into the past do you want to load events from? If zero and "Future Days" is zero, then month and year will be used.',
        'future_title' => 'Future Days',
        'future_description' => 'How far into the future do you want to load events from? If zero and "Past Days" is zero, then month and year will be used.',
        'raw_data_title' => 'Supply Raw Data',
        'raw_data_description' => 'When event details are requested, supply raw Event and Occurance data to page instead of default formated array.',

        'opt_no' => 'No',
        'opt_yes' => 'Yes',
    ],
    'event' => [// Event Component and Model
        'name' => 'Event View',
        'description' => 'Shows one event on page with details',
        'label' => 'Event',
        'id' => 'ID',
        'title' => 'Title',
        'is_published' => 'Published',
        'user_id' => 'Creator',
        'fname' => 'Creator First',
        'lname' => 'Creator Last',
        'date' => 'Date',
        'length' => 'Event Length',
        'time' => 'Time',
        'text' => 'Details',
        'pattern' => 'Recuring Event Pattern',
        'link' => 'Link',
        'categorys' => 'Categories',
        'category' => 'Category',
        'error_not_found' => 'Event not found!',
        'error_allow_no' => 'Event not allowed!',
        'error_prohibit' => 'Event Prohibited!',
        'phold_name' => 'Name your Event',
        'phold_fname' => 'Creator First',
        'phold_lname' => 'Creator Last',
        'phold_date' => 'Pick a Date',
        'phold_time' => 'Pick a Time',
        'phold_length' => 'Your event will last for HH:MM',
        'phold_text' => 'Enter as much details as you want about your event. (HTML OK)',
        'phold_link' => 'Add URL Link to your event.',
        'phold_categorys' => 'Categories',
        'empty_categorys' => 'There are no categories, you should create one first!',
        'slug_title' => 'Event Slug',
        'slug_description' => 'URL slug to indicate Event ID to view on page',
        'link_title' => 'Events List Page',
        'link_description' => 'Name of the event page file for list or calendar page. This property is used by the event component partial.',
        'link_group' => 'Links',
    ],
    'event_form' => [// EventForm Component
        'name' => 'Event Form',
        'description' => 'Front end form to allow users to ad their own events',
        'allow_pub_title' => 'Allow Publish',
        'allow_pub_description' => 'Allow users to publish their event. (No means an admin must do it.)',
        'ckeditor_title' => 'Use CKEditor',
        'ckeditor_description' => 'Load CKEditor from cdn.ckeditor.com and show rich editor field for event description.',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
        'btn_add' => 'Add Event',
        'btn_edit' => 'Edit',
        'btn_copy' => 'Copy',
        'btn_delete' => 'Delete',
        'btn_save' => 'Save',
        'btn_preview' => 'Preview',
        'btn_cancel' => 'Cancel / Go Back to List',
        'saving' => 'Saving Event...',
        'delete_conf' => 'Do you really want to delete this event?',
        'every' => 'Every',
        'repeat' => 'Repeat',
        'btn_save' => 'Save',
        'btn_save' => 'Save',
        'btn_save' => 'Save',
        'btn_save' => 'Save',
    ],
    'month_events' => [// MonthEvents Component
        'name' => 'Month View w/ Event Data',
        'description' => 'Show Full Month View with DB events',
    ],
    'list_events' => [// ListEvents Component
        'name' => 'Event List w/ Event Data',
        'description' => 'Show Event List View with DB events',
    ],
    'category' => [// Category Model
        'name' => 'Category',
        'slug' => 'Slug',
        'description' => 'Description',
        'permission' => 'Permision for this Category',
        'phold_name' => 'Name of Category',
        'phold_slug' => 'Slug for URLS',
        'phold_description' => 'More details',
        'comment_permission' => 'Set the permision for this category.',
    ],
    'occurrence' => [// Event Component and Model
        'name' => 'Occurrence',
        'description' => 'Every occurence on the calendar for an event.',
        'label' => 'Occurrence',
        'id' => 'ID',
        'event_id' => 'Event ID',
        'relation' => 'Relation',
        'relation_id' => 'Relation ID',
        'start_at' => 'Starts',
        'end_at' => 'Ends',
        'is_modified' => 'Modified',
        'is_allday' => 'All Day',
        'is_canceled' => 'Canceled',
    ],
    'rrule' => [// Rrule Form
        'repeat' => 'Repeat',
        'INTERVAL' => 'Every',
        'WBYDAY' => 'On',
        'YBYMONTH' => ' Of ',
        'on_the' => 'On The',
        'bymonthday' => 'bymonthday',
        'bysetpos' => 'bysetpos',
        'byday' => 'byday',
        'bymonth' => 'bymonth',
        'INTERVALS' => 'Enter day intervals seperated by commas',
        'INTERVALS_example' => 'Example: "1,2,1,4" would represent event on first day, skip 2 days, another 1 event day, skip 4 days and then repeat.</p>
        <p>If your event started on the first day of February using example series above, then event dates would be February 1,4,9,12,17,20,25,28 March 2,5,etc...',

        'timezone' => 'Timezone',

        'timezones' => [

            '+00:00' => '(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London',
            '+01:00' => '(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
            '+02:00' => '(GMT+02:00) Harare, Pretoria,Jerusalem',
            '+03:00' => '(GMT+03:00) Baghdad',
            '+04:00' => '(GMT+04:00) Abu Dhabi, Muscat',
            '+05:00' => '(GMT+05:00) Tashkent',
            '+05:30' => '(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
            '+05:45' => '(GMT+05:45) Kathmandu',
            '+06:00' => '(GMT+06:00) Astana, Dhaka',
            '+06:00' => '(GMT+06:30) Yangon (Rangoon)',
            '+07:00' => '(GMT+07:00) Bangkok, Hanoi, Jakarta',
            '+08:00' => '(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi, Singapore, Taipei',
            '+09:00' => '(GMT+09:00) Osaka, Sapporo, Tokyo, Seoul',
            '+09:30' => '(GMT+09:30) Darwin',
            '+10:00' => '(GMT+10:00) Brisbane, Canberra, Melbourne, Sydney',
            '+11:00' => '(GMT+11:00) Magadan, Solomon Is., New Caledonia',
            '+12:00' => '(GMT+12:00) Auckland, Wellington, Fiji, Kamchatka, Marshall Is.',
            '-02:00' => '(GMT-02:00) Mid-Atlantic',
            '-03:00' => '(GMT-03:00) Brasilia, Buenos Aires, Georgetown, Greenland, Newfoundland',
            '-04:00' => '(GMT-04:00) Atlantic Time (Canada), Santiago',
            '-04:30' => '(GMT-04:30) Caracas',
            '-05:00' => '(GMT-05:00) Bogota, Lima, Quito, Rio Branco, Eastern Time (US &amp; Canada)',
            '-06:00' => '(GMT-06:00) Central America, Central Time (US &amp; Canada), Guadalajara',
            '-07:00' => '(GMT-07:00) Arizona, Chihuahua, Mazatlan, Mountain Time (US &amp; Canada) *',
            '-08:00' => '(GMT-08:00) Pacific Time (US &amp; Canada), Tijuana, Baja California',
            '-09:00' => '(GMT-09:00) Alaska',
            '-10:00' => '(GMT-10:00) Hawaii',
            '-11:00' => '(GMT-11:00) Midway Island, Samoa',
            '-12:00' => '(GMT-12:00) International Date Line West',
        ],
        'freq' => [
            'NONE' => 'None (run once)',
            'HOURLY' => 'Hourly',
            'DAILY' => 'Daily',
            'WEEKDAYS' => 'Weekdays',
            'WEEKENDS' => 'Weekends',
            'WEEKLY' => 'Weekly',
            'MONTHLY' => 'Monthly',
            'YEARLY' => 'Yearly',
            'SERIES' => 'Shift Series',
        ],
        'freq_units' => [
            'HOURLY' => 'hour(s)',
            'DAILY' => 'day(s)',
            'WEEKLY' => 'week(s)',
            'MONTHLY' => 'month(s)',
            'YEARLY' => 'year(s)',
        ],
        'SU' => 'Sun',
        'MO' => 'Mon',
        'TU' => 'Tue',
        'WE' => 'Wed',
        'TH' => 'Thu',
        'FR' => 'Fri',
        'SA' => 'Sat',
        'ByDay' => [
            'SU' => 'Sunday',
            'MO' => 'Monday',
            'TU' => 'Tuesday',
            'WE' => 'Wednesday',
            'TH' => 'Thursday',
            'FR' => 'Friday',
            'SA' => 'Saturday',
            'SU,MO,TU,WE,TH,FR,SA' => 'Day',
            'MO,TU,WE,TH,FR' => 'Weekday',
            'SU,SA' => 'Weekend day',
        ],
        'on' => ['on_day' => 'On Date Above', 'on_the' => 'On The',
        ],
        'day-pos' => [
            '1' => 'First',
            '2' => 'Second',
            '3' => 'Third',
            '4' => 'Fourth',
            '-1' => 'Last',
            '-2' => 'Second to Last',
        ],
        'month' => [
            '1' => 'January',
            '2' => 'February',
            '3' => 'March',
            '4' => 'April',
            '5' => 'May',
            '6' => 'June',
            '7' => 'July',
            '8' => 'August',
            '9' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ],
        'ENDON' => 'End Date',
        'Never' => 'Never',
        'After' => 'After',
        'On_date' => 'On Date',
    ],
];
