,
    '#title' => t('Sidebar first offset'),
    '#default_value' => theme_get_setting('bootstrap_sidebar_first_offset'),
    '#options' => [
      0 => t('None'),
      1 => t('1 cols'),
      2 => t('2 cols'),
    ],
  ];

  // Sidebar second layout.
  $form['layout']['sidebar_second'] = [
    '#type' => 'details',
    '#title' => t('Sidebar second layout'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['layout']['sidebar_second']['bootstrap_sidebar_second_width'] = [
    '#type' => 'select',
    '#title' => t('Sidebar second width'),
    '#default_value' => theme_get_setting('bootstrap_sidebar_second_width'),
    '#options' => [
      2 => t('2 cols'),
      3 => t('3 cols'),
      4 => t('4 cols'),
    ],
  ];
  $form['layout']['sidebar_second']['bootstrap_sidebar_second_offset'] = [
    '#type' => 'select',
    '#title' => t('Sidebar second offset'),
    '#default_value' => theme_get_setting('bootstrap_sidebar_second_offset'),
    '#options' => [
      0 => t('None'),
      1 => t('1 cols'),
      2 => t('2 cols'),
    ],
  ];

  // Components.
  $form['components'] = [
    '#type' => 'details',
    '#title' => t('Components'),
    '#group' => 'bootstrap',
  ];

  // Node.
  $form['components']['node'] = [
    '#type' => 'details',
    '#title' => t('Node'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['node']['bootstrap_hide_node_label'] = [
    '#type' => 'checkbox',
    '#title' => t('Hide node label'),
    '#default_value' => theme_get_setting('bootstrap_hide_node_label'),
    '#description' => t('Hide node label for all display. Usefull when using f.e. Layout Builder and you want full control of your output'),
  ];

  // Breadcrumbs.
  $form['components']['breadcrumb'] = [
    '#type' => 'details',
    '#title' => t('Breadcrumb'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['breadcrumb']['bootstrap_breadcrumb_divider'] = [
    '#type' => 'textfield',
    '#title' => t('Breadcrumb Divider'),
    '#size' => 60,
    '#maxlength' => 256,
    '#default_value' => theme_get_setting('bootstrap_breadcrumb_divider'),
    '#description' => t('Change the default breadcrumb divider. See @bootstrap_breadcrumb_link.', [
      '@bootstrap_breadcrumb_link' => Link::fromTextAndUrl('breadcrumb in the Bootstrap 5.x documentation', Url::fromUri('https://getbootstrap.com/docs/5.2/components/breadcrumb/', ['absolute' => TRUE, 'fragment' => 'outline-buttons']))->toString(),
    ]),
  ];

  // Buttons.
  $form['components']['buttons'] = [
    '#type' => 'details',
    '#title' => t('Buttons'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['buttons']['bootstrap_button'] = [
    '#type' => 'checkbox',
    '#title' => t('Convert input submit to button element'),
    '#default_value' => theme_get_setting('bootstrap_button'),
    '#description' => t('There is a known issue where Ajax exposed filters do not if this setting is enabled.'),
  ];
  $form['components']['buttons']['bootstrap_button_type'] = [
    '#type' => 'select',
    '#title' => t('Default button type'),
    '#default_value' => theme_get_setting('bootstrap_button_type'),
    '#options' => [
      'primary' => t('Primary'),
      'secondary' => t('Secondary'),
    ],
  ];
  $form['components']['buttons']['bootstrap_button_size'] = [
    '#type' => 'select',
    '#title' => t('Default button size'),
    '#default_value' => theme_get_setting('bootstrap_button_size'),
    '#empty_option' => t('Normal'),
    '#options' => [
      'btn-sm' => t('Small'),
      'btn-lg' => t('Large'),
    ],
  ];
  $form['components']['buttons']['bootstrap_button_outline'] = [
    '#type' => 'checkbox',
    '#title' => t('Button with outline format'),
    '#default_value' => theme_get_setting('bootstrap_button_outline'),
    '#description' => t('Use <code>.btn-default-outline</code> class. See @bootstrap_outline_buttons_link.', [
      '@bootstrap_outline_buttons_link' => Link::fromTextAndUrl('Outline buttons in the Bootstrap 4 documentation', Url::fromUri('https://getbootstrap.com/docs/5.2/components/buttons/', ['absolute' => TRUE, 'fragment' => 'outline-buttons']))->toString(),
    ]),
  ];

  // Images.
  $form['components']['images'] = [
    '#type' => 'details',
    '#title' => t('Images'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['images']['bootstrap_image_fluid'] = [
    '#type' => 'checkbox',
    '#title' => t('Apply img-fluid style to all content images'),
    '#default_value' => theme_get_setting('bootstrap_image_fluid'),
    '#description' => t('Adds a img-fluid style to all ".content img" elements'),
  ];

  // Navbar.
  $form['components']['navbar'] = [
    '#type' => 'details',
    '#title' => t('Navbar structure'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['navbar']['bootstrap_navbar_container'] = [
    '#type' => 'checkbox',
    '#title' => t('Navbar width container'),
    '#description' => t('Check if navbar width will be inside container or fluid width.'),
    '#default_value' => theme_get_setting('bootstrap_navbar_container'),
  ];
  $form['components']['navbar']['bootstrap_navbar_toggle'] = [
    '#type' => 'select',
    '#title' => t('Navbar toggle size'),
    '#description' => t('Select size for navbar to collapse.'),
    '#default_value' => theme_get_setting('bootstrap_navbar_toggle'),
    '#options' => [
      'navbar-toggleable-xl' => t('Extra Large'),
      'navbar-toggleable-lg' => t('Large'),
      'navbar-toggleable-md' => t('Medium'),
      'navbar-toggleable-sm' => t('Small'),
      'navbar-toggleable-xs' => t('Extra small'),
      'navbar-toggleable-all' => t('All screens'),
    ],
  ];
  $form['components']['navbar']['bootstrap_navbar_top_navbar'] = [
    '#type' => 'checkbox',
    '#title' => t('Navbar top is navbar'),
    '#description' => t('Check if navbar top .navbar class should be added.'),
    '#default_value' => theme_get_setting('bootstrap_navbar_top_navbar'),
  ];
  $form['components']['navbar']['bootstrap_navbar_top_position'] = [
    '#type' => 'select',
    '#title' => t('Navbar top position'),
    '#description' => t('Select your navbar top position.'),
    '#default_value' => theme_get_setting('bootstrap_navbar_top_position'),
    '#options' => [
      'fixed-top' => t('Fixed top'),
      'fixed-bottom' => t('Fixed bottom'),
      'sticky-top' => t('Sticky top'),
    ],
    '#empty_option' => t('Normal'),
  ];
  $form['components']['navbar']['bootstrap_navbar_top_color'] = [
    '#type' => 'select',
    '#title' => t('Navbar top link color'),
    '#default_value' => theme_get_setting('bootstrap_navbar_top_color'),
    '#options' => [
      'navbar-light' => t('Light'),
      'navbar-dark' => t('Dark'),
    ],
    '#empty_option' => t('Default'),
  ];
  $form['components']['navbar']['bootstrap_navbar_top_background'] = [
    '#type' => 'select',
    '#title' => t('Navbar top background color'),
    '#default_value' => theme_get_setting('bootstrap_navbar_top_background'),
    '#options' => [
      'bg-primary' => t('Primary'),
      'bg-light' => t('Light'),
      'bg-dark' => t('Dark'),
    ],
    '#empty_option' => t('Default'),
  ];
  $form['components']['navbar']['bootstrap_navbar_position'] = [
    '#type' => 'select',
    '#title' => t('Navbar position'),
    '#default_value' => theme_get_setting('bootstrap_navbar_position'),
    '#options' => [
      'fixed-top' => t('Fixed top'),
      'fixed-bottom' => t('Fixed bottom'),
      'sticky-top' => t('Sticky top'),
    ],
    '#empty_option' => t('Normal'),
  ];
  $form['components']['navbar']['bootstrap_navbar_color'] = [
    '#type' => 'select',
    '#title' => t('Navbar link color'),
    '#default_value' => theme_get_setting('bootstrap_navbar_color'),
    '#options' => [
      'navbar-light' => t('Light'),
      'navbar-dark' => t('Dark'),
    ],
    '#empty_option' => t('Default'),
  ];
  $form['components']['navbar']['bootstrap_navbar_background'] = [
    '#type' => 'select',
    '#title' => t('Navbar background color'),
    '#default_value' => theme_get_setting('bootstrap_navbar_background'),
    '#options' => [
      'bg-primary' => t('Primary'),
      'bg-light' => t('Light'),
      'bg-dark' => t('Dark'),
    ],
    '#empty_option' => t('Default'),
  ];
  // Allow custom classes on Navbars.
  $form['components']['navbar']['bootstrap_navbar_top_class'] = [
    '#type' => 'textfield',
    '#title' => t('Custom classes for Navbar Top'),
    '#default_value' => theme_get_setting('bootstrap_navbar_top_class'),
    '#size' => 40,
    '#maxlength' => 40,
  ];
  $form['components']['navbar']['bootstrap_navbar_class'] = [
    '#type' => 'textfield',
    '#title' => t('Custom classes for Navbar'),
    '#default_value' => theme_get_setting('bootstrap_navbar_class'),
    '#size' => 40,
    '#maxlength' => 40,
  ];

  // Navbar behaviour.
  $form['components']['navbar_behaviour'] = [
    '#type' => 'details',
    '#title' => t('Navbar behaviour'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];

  $form['components']['navbar_behaviour']['bootstrap_navbar_offcanvas'] = [
    '#type' => 'select',
    '#title' => t('Default/Bootstrap Offcanvas Collapse'),
    '#default_value' => theme_get_setting('bootstrap_navbar_offcanvas'),
    '#options' => [
      'offcanvas-collapse' => t('Offcanvas'),
    ],
    '#empty_option' => t('Default'),
  ];

  $form['components']['navbar_behaviour']['bootstrap_navbar_flyout'] = [
    '#type' => 'checkbox',
    '#title' => t('Flyout style main menu'),
    '#default_value' => theme_get_setting('bootstrap_navbar_flyout'),
  ];

  $form['components']['navbar_behaviour']['bootstrap_navbar_slide'] = [
    '#type' => 'checkbox',
    '#title' => t('Sliding navbar'),
    '#description' => t('Collapsed navbar will slide left to right'),
    '#default_value' => theme_get_setting('bootstrap_navbar_slide'),
    '#description' => t('DO NOT USE IN NEW SITES. Removed in favor of Bootstrap Offcanvas.'),
  ];

  // Tabs.
  $form['components']['tabs'] = [
    '#type' => 'details',
    '#title' => t('Tabs (local tasks)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];

  $form['components']['tabs']['bootstrap_tabs_style'] = [
    '#type' => 'select',
    '#title' => t('Tabs style'),
    '#default_value' => theme_get_setting('bootstrap_tabs_style'),
    '#options' => [
      'full' => t('Full width blocks'),
      'pills' => t('Pills'),
    ],
    '#empty_option' => t('Default'),
  ];

  // Messages.
  $form['components']['alerts'] = [
    '#type' => 'details',
    '#title' => t('Messages'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['alerts']['bootstrap_messages_widget'] = [
    '#type' => 'select',
    '#title' => t('Messages widget'),
    '#default_value' => theme_get_setting('bootstrap_messages_widget'),
    '#options' => [
      'default' => t('Alerts classic'),
      'alerts' => t('Alerts bottom'),
      'toasts' => t('Toasts'),
    ],
  ];
  $form['components']['alerts']['bootstrap_messages_widget_toast_delay'] = [
    '#type' => 'number',
    '#title' => t('Toast delay'),
    '#default_value' => theme_get_setting('bootstrap_messages_widget_toast_delay') ?? 10000,
    '#description' => t('How long to keep the toast open in milliseconds.'),
    '#states' => [
      'visible' => [
        ':input[name="bootstrap_messages_widget"]' => ['value' => 'toasts'],
      ],
    ],
  ];

  // Form.
  $form['components']['form'] = [
    '#type' => 'details',
    '#title' => t('Form Elements'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['components']['form']['bootstrap_float_label'] = [
    '#type' => 'checkbox',
    '#title' => t('Float Labels'),
    '#default_value' => theme_get_setting('bootstrap_float_label'),
  ];
  $form['components']['form']['bootstrap_checkbox'] = [
    '#type' => 'select',
    '#title' => t('Checkbox & Radio Style'),
    '#default_value' => theme_get_setting('bootstrap_checkbox'),
    '#empty_option' => t('Default'),
    '#options' => [
      'switch' => t('Switch'),
      'button' => t('Button'),
    ],
  ];

  // Affix.
  $form['affix'] = [
    '#type' => 'details',
    '#title' => t('Affix'),
    '#group' => 'bootstrap',
  ];
  $form['affix']['navbar_top'] = [
    '#type' => 'details',
    '#title' => t('Affix navbar top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['affix']['navbar_top']['bootstrap_navbar_top_affix'] = [
    '#type' => 'checkbox',
    '#title' => t('Affix navbar top'),
    '#default_value' => theme_get_setting('bootstrap_navbar_top_affix'),
  ];
  /*
  $form['affix']['navbar_top']['bootstrap_navbar_top_affix_top'] = [
  '#type' => 'textfield',
  '#title' => t('Affix top'),
  '#default_value' => theme_get_setting('bootstrap_navbar_top_affix_top'
  ),
  '#prefix' => '<div id="navbar-top-affix">',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_navbar_top_affix"]' => ['checked' => FALSE],
  ],
  ],
  ];
  $form['affix']['navbar_top']['bootstrap_navbar_top_affix_bottom'] = [
  '#type' => 'textfield',
  '#title' => t('Affix bottom'),
  '#default_value' => theme_get_setting(
  'bootstrap_navbar_top_affix_bottom'),
  '#suffix' => '</div>',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_navbar_top_affix"]' => ['checked' => FALSE],
  ],
  ],
  ];
   */
  $form['affix']['navbar'] = [
    '#type' => 'details',
    '#title' => t('Affix navbar'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['affix']['navbar']['bootstrap_navbar_affix'] = [
    '#type' => 'checkbox',
    '#title' => t('Affix navbar'),
    '#default_value' => theme_get_setting('bootstrap_navbar_affix'),
  ];
  /*
  $form['affix']['navbar']['bootstrap_navbar_affix_top'] = [
  '#type' => 'textfield',
  '#title' => t('Affix top'),
  '#default_value' => theme_get_setting('bootstrap_navbar_affix_top'),
  '#prefix' => '<div id="navbar-affix">',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_navbar_affix"]' => ['checked' => FALSE],
  ],
  ],
  ];
  $form['affix']['navbar']['bootstrap_navbar_affix_bottom'] = [
  '#type' => 'textfield',
  '#title' => t('Affix bottom'),
  '#default_value' => theme_get_setting('bootstrap_navbar_affix_bottom'),
  '#suffix' => '</div>',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_navbar_affix"]' => ['checked' => FALSE],
  ],
  ],
  ];
   */
  $form['affix']['sidebar_first'] = [
    '#type' => 'details',
    '#title' => t('Affix sidebar first'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['affix']['sidebar_first']['bootstrap_sidebar_first_affix'] = [
    '#type' => 'checkbox',
    '#title' => t('Affix sidebar first'),
    '#default_value' => theme_get_setting('bootstrap_sidebar_first_affix'),
  ];
  /*
  $form['affix']['sidebar_first'][
  'bootstrap_sidebar_first_affix_top'] = array(
  '#type' => 'textfield',
  '#title' => t('Affix top'),
  '#default_value' => theme_get_setting(
  'bootstrap_sidebar_first_affix_top'),
  '#prefix' => '<div id="sidebar-first-affix">',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_sidebar_first_affix"]' => ['checked' => FALSE],
  ],
  ],
  );
  $form['affix']['sidebar_first'][
  'bootstrap_sidebar_first_affix_bottom'] = array(
  '#type' => 'textfield',
  '#title' => t('Affix bottom'),
  '#default_value' => theme_get_setting(
  'bootstrap_sidebar_first_affix_bottom'),
  '#suffix' => '</div>',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_sidebar_first_affix"]' => ['checked' => FALSE],
  ],
  ],
  ); */
  $form['affix']['sidebar_second'] = [
    '#type' => 'details',
    '#title' => t('Affix sidebar second'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['affix']['sidebar_second']['bootstrap_sidebar_second_affix'] = [
    '#type' => 'checkbox',
    '#title' => t('Affix sidebar second'),
    '#default_value' => theme_get_setting('bootstrap_sidebar_second_affix'),
  ];
  /*
  $form['affix']['sidebar_second'][
  'bootstrap_sidebar_second_affix_top'] = [
  '#type' => 'textfield',
  '#title' => t('Affix top'),
  '#default_value' => theme_get_setting(
  'bootstrap_sidebar_second_affix_top'),
  '#prefix' => '<div id="sidebar-second-affix">',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_sidebar_second_affix"]' => ['checked' => FALSE],
  ],
  ],
  ];
  $form['affix']['sidebar_second'][
  'bootstrap_sidebar_second_affix_bottom'] = [
  '#type' => 'textfield',
  '#title' => t('Affix bottom'),
  '#default_value' => theme_get_setting(
  'bootstrap_sidebar_second_affix_bottom'),
  '#suffix' => '</div>',
  '#size' => 6,
  '#maxlength' => 3,
  '#states' => [
  'invisible' => [
  'input[name="bootstrap_sidebar_second_affix"]' => ['checked' => FALSE],
  ],
  ],
  ];
   */
  // Scroll Spy.
  $form['scroll_spy'] = [
    '#type' => 'details',
    '#title' => t('Scroll Spy'),
    '#group' => 'bootstrap',
  ];
  $form['scroll_spy']['bootstrap_scroll_spy'] = [
    '#type' => 'textfield',
    '#title' => t('Scrollspy element ID'),
    '#description' => t('Specify a valid jQuery ID for the element containing a .nav that will behave with scrollspy.'),
    '#default_value' => theme_get_setting('bootstrap_scroll_spy'),
    '#size' => 40,
    '#maxlength' => 40,
  ];

  // Fonts.
  $form['fonts'] = [
    '#type' => 'details',
    '#title' => t('Fonts & icons'),
    '#group' => 'bootstrap',
  ];
  $form['fonts']['fonts'] = [
    '#type' => 'details',
    '#title' => t('Fonts'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['fonts']['fonts']['bootstrap_google_fonts'] = [
    '#type' => 'select',
    '#title' => t('Google Fonts combination'),
    '#default_value' => theme_get_setting('bootstrap_google_fonts'),
    '#empty_option' => t('None'),
    '#options' => [
      'roboto' => t('Roboto Condensed, Roboto'),
      'monserrat_lato' => t('Monserrat, Lato'),
      'alegreya_roboto' => t('Alegreya, Roboto Condensed, Roboto'),
      'dancing_garamond' => t('Dancing Script, EB Garamond'),
      'amatic_josefin' => t('Amatic SC, Josefin Sans'),
      'oswald_droid' => t('Oswald, Droid Serif'),
      'playfair_alice' => t('Playfair Display, Alice'),
      'dosis_opensans' => t('Dosis, Open Sans'),
      'lato_hotel' => t('Lato, Grand Hotel'),
      'medula_abel' => t('Medula One, Abel'),
      'fjalla_cantarell' => t('Fjalla One, Cantarell'),
      'coustard_leckerli' => t('Coustard Ultra, Leckerli One'),
      'philosopher_muli' => t('Philosopher, Muli'),
      'vollkorn_exo' => t('Vollkorn, Exo'),
    ],
  ];
  $form['fonts']['bootstrap_icons'] = [
    '#type' => 'details',
    '#title' => t('Bootstrap icons'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['fonts']['bootstrap_icons']['bootstrap_bootstrap_icons'] = [
    '#type' => 'checkbox',
    '#title' => t('Use Bootstrap icons'),
    '#default_value' => theme_get_setting('bootstrap_bootstrap_icons'),
  ];
  $form['fonts']['icons'] = [
    '#type' => 'details',
    '#title' => t('Icons'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['fonts']['icons']['bootstrap_icons'] = [
    '#type' => 'select',
    '#title' => t('Icon set'),
    '#default_value' => theme_get_setting('bootstrap_icons'),
    '#empty_option' => t('None'),
    '#options' => [
      'material_design_icons' => t('Material Design Icons'),
      'fontawesome' => t('Font Awesome'),
    ],
  ];

  // Copyright   
  $form['copyright'] = [
    '#type' => 'details',
    '#title' => t('Copyright'),
    '#group' => 'bootstrap',
  ];

  $form['copyright']['copyright'] = [
    '#type' => 'textfield',
    '#title' => t('Firma'),
    '#description' => t('Podaj nazwę firmy'),
    '#default_value' => theme_get_setting('copyright'),
    '#size' => 60,
    '#maxlength' => 60,
  ];

  $form['copyright']['abel'] = [
    '#type' => 'checkbox',
    '#title' => t('Czy logo Abel-IT'),
    '#default_value' => theme_get_setting('abel'),
  ];

}

/**
 * @param $form
 * @param FormStateInterface $form_state
 * @return mixed
 */
function colorCallbackDafr($form, FormStateInterface $form_state)
{
  return $form['colors']['scheme']['color_container'];
}
