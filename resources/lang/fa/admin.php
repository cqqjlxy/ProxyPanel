<?php

declare(strict_types=1);

return [
    'dashboard' => [
        'users' => 'تعداد کل کاربران',
        'available_users' => 'تعداد کاربران فعال',
        'paid_users' => 'تعداد کاربران پرداخت‌کننده',
        'active_days_users' => 'کاربران فعال در :days روز گذشته',
        'inactive_days_users' => 'کاربران غیرفعال بیش از :days روز',
        'online_users' => 'کاربران آنلاین فعلی',
        'expiring_users' => 'کاربرانی که به‌زودی منقضی می‌شوند',
        'overuse_users' => 'کاربران مصرف بالای داده (بیش از 90٪)',
        'abnormal_users' => 'کاربران با ترافیک غیرعادی در 1 ساعت گذشته',
        'nodes' => 'تعداد نودها',
        'maintaining_nodes' => 'نودهای در حال نگهداری',
        'current_month_traffic_consumed' => 'مصرف ترافیک این ماه',
        'days_traffic_consumed' => 'مصرف ترافیک در :days روز گذشته',
        'orders' => 'تعداد کل سفارشات',
        'online_orders' => 'تعداد سفارشات پرداخت آنلاین',
        'succeed_orders' => 'تعداد سفارشات پرداخت‌شده',
        'credit' => 'موجودی کل',
        'withdrawing_commissions' => 'کمیسیون‌های درحال برداشت',
        'withdrawn_commissions' => 'کمیسیون‌های برداشت‌شده',
    ],
    'action' => [
        'edit_item' => 'ویرایش :attribute',
        'add_item' => 'افزودن :attribute',
    ],
    'confirm' => [
        'delete' => [0 => 'حذف :attribute [', 1 => '] را تأیید می‌کنید؟'],
        'continues' => 'ادامه عملیات را تأیید می‌کنید؟',
        'export' => 'صدور همه را تأیید می‌کنید؟',
    ],
    'user_dashboard' => 'داشبورد کاربر',
    'menu' => [
        'dashboard' => 'داشبورد',
        'user' => [
            'attribute' => 'کاربران',
            'list' => 'مدیریت کاربران',
            'oauth' => 'احراز هویت کاربران',
            'group' => 'گروه‌های کاربری',
            'credit_log' => 'تغییرات موجودی',
            'subscribe' => 'مدیریت اشتراک',
        ],
        'rbac' => [
            'attribute' => 'کنترل دسترسی',
            'permission' => 'مجوزها',
            'role' => 'نقش‌ها',
        ],
        'customer_service' => [
            'attribute' => 'پشتیبانی',
            'ticket' => 'تیکت‌ها',
            'article' => 'مقالات',
            'push' => 'اعلان‌ها',
            'mail' => 'ایمیل',
        ],
        'node' => [
            'attribute' => 'نودها',
            'list' => 'مدیریت نودها',
            'auth' => 'مجوزهای API',
            'cert' => 'گواهی‌نامه‌ها',
        ],
        'rule' => [
            'attribute' => 'قوانین',
            'list' => 'لیست قوانین',
            'group' => 'گروه قوانین',
            'trigger' => 'رکوردهای فعال‌سازی',
        ],
        'shop' => [
            'attribute' => 'فروشگاه',
            'goods' => 'محصولات',
            'coupon' => 'کوپن‌ها',
            'order' => 'سفارشات',
        ],
        'promotion' => [
            'attribute' => 'تبلیغات',
            'invite' => 'دعوت‌نامه‌ها',
            'withdraw' => 'برداشت‌ها',
            'rebate_flow' => 'سوابق بازگشت درآمد',
        ],
        'analysis' => [
            'attribute' => 'تحلیل‌ها',
            'accounting' => 'حسابداری',
            'user_flow' => 'جریان کاربر',
        ],
        'log' => [
            'attribute' => 'لاگ‌ها',
            'traffic' => 'مصرف داده',
            'traffic_flow' => 'جریان داده',
            'service_ban' => 'سوابق مسدودسازی',
            'online_logs' => 'لاگ‌های آنلاین',
            'online_monitor' => 'نظارت آنلاین',
            'notify' => 'اعلان‌ها',
            'payment_callback' => 'بازخوانی پرداخت',
            'system' => 'لاگ‌های سیستم',
        ],
        'tools' => [
            'attribute' => 'ابزارها',
            'decompile' => 'دکومپایل',
            'convert' => 'تبدیل فرمت',
            'import' => 'وارد کردن',
            'analysis' => 'تجزیه و تحلیل لاگ',
        ],
        'setting' => [
            'attribute' => 'تنظیمات',
            'email_suffix' => 'پسوند ایمیل',
            'universal' => 'عمومی',
            'system' => 'سیستم',
        ],
    ],
    'user' => [
        'massive' => [
            'text' => 'تعداد کاربران برای تولید',
            'failed' => 'تولید دسته‌ای حساب کاربری ناموفق بود',
            'succeed' => 'تولید دسته‌ای حساب کاربری موفق بود',
            'note' => 'تولید دسته‌ای کاربر در پشتیبان',
        ],
        'proxy_info' => 'اطلاعات پیکربندی',
        'traffic_monitor' => 'آمار ترافیک',
        'online_monitor' => 'نظارت آنلاین',
        'reset_traffic' => 'تنظیم مجدد داده',
        'user_view' => 'نمای کاربر',
        'connection_test' => 'آزمایش اتصال',
        'counts' => 'تعداد کل حساب‌ها <code>:num</code>',
        'reset_confirm' => [0 => 'تنظیم مجدد داده‌های [', 1 => '] را تأیید می‌کنید؟'],
        'info' => [
            'account' => 'اطلاعات حساب',
            'proxy' => 'اطلاعات پروکسی',
            'switch' => 'تعویض هویت',
            'reset_date_hint' => 'تاریخ تنظیم مجدد بعدی داده',
            'expired_date_hint' => 'خالی بگذارید برای یک سال پیش‌فرض',
            'uuid_hint' => 'شناسه کاربری برای V2Ray',
            'recharge_placeholder' => 'منفی برای کسر از موجودی',
        ],
        'update_help' => 'به‌روزرسانی موفق، برگشت؟',
        'proxies_config' => 'اطلاعات پیکربندی اتصال [:username]',
        'group' => [
            'title' => 'گروه‌های کاربری <small>(یک نود می‌تواند در چند گروه باشد، اما هر کاربر فقط می‌تواند در یک گروه باشد)</small>',
            'name' => 'نام گروه',
            'counts' => 'تعداد کل گروه‌ها <code>:num</code>',
        ],
    ],
    'zero_unlimited_hint' => 'صفر یا خالی برای نامحدود',
    'node' => [
        'traffic_monitor' => 'آمار ترافیک',
        'refresh_geo' => 'به‌روزرسانی داده‌های مکانی',
        'ping' => 'آزمایش تأخیر',
        'connection_test' => 'آزمایش اتصال',
        'counts' => 'تعداد کل نودها <code>:num</code>',
        'reload_all' => 'بارگذاری مجدد همه پشته‌ها',
        'refresh_geo_all' => 'به‌روزرسانی داده‌های مکانی همه نودها',
        'reload_confirm' => 'بارگذاری مجدد نود را تأیید می‌کنید؟',
        'info' => [
            'hint' => '<strong>توجه:</strong> <code>ID</code> تولیدشده به‌طور خودکار، همان <code>node_id</code> برای پشته ShadowsocksR و <code>nodeId</code> برای پشته V2Ray است',
            'basic' => 'اطلاعات پایه',
            'ddns_hint' => 'نودهای IP داینامیک نیاز به <a href="https://github.com/NewFuture/DDNS" target="_blank">DDNS</a> دارند. آزمایش اتصال از نام دامنه استفاده می‌کند',
            'domain_placeholder' => 'دامنه سرور، اولی استفاده می‌شود اگر پر شده باشد',
            'domain_hint' => 'با فعال‌سازی DDNS، دامنه به‌طور خودکار به IP متصل می‌شود! دیگر نیاز نیست دستی رکورد DNS را ویرایش کنید.',
            'extend' => 'اطلاعات تکمیلی',
            'display' => [
                'invisible' => 'نامرئی',
                'node' => 'فقط در صفحه نود قابل مشاهده',
                'sub' => 'فقط در اشتراک‌ها قابل مشاهده',
                'all' => 'کاملاً قابل مشاهده',
                'hint' => 'آیا در لیست اشتراک/نود قابل مشاهده است',
            ],
            'ipv4_hint' => 'چندین IP با "," جدا شوند؛ مثال: 1.1.1.1, 8.8.8.8',
            'ipv6_hint' => 'چندین IP با "," جدا شوند؛ مثال: 1.1.1.1, 8.8.8.8',
            'ipv4_placeholder' => 'آدرس IPv4 سرور',
            'ipv6_placeholder' => 'آدرس IPv6 سرور، اگر پر شود کاربر می‌بیند',
            'push_port_hint' => 'لازم است و در دیواره آتش باز باشد، در غیر این صورت ارسال پیام ناموفق خواهد بود',
            'data_rate_hint' => 'مثال: 0.1 به این معنی است که 100M به عنوان 10M محاسبه می‌شود؛ 5 به این معنی است که 100M به عنوان 500M محاسبه می‌شود',
            'level_hint' => 'سطح: 0 = بدون امتیاز، همه نودها قابل مشاهده هستند',
            'detection' => [
                'tcp' => 'فقط TCP',
                'icmp' => 'فقط ICMP',
                'all' => 'تشخیص همه',
                'hint' => 'بررسی تصادفی هر 30-60 دقیقه',
            ],
            'obfs_param_hint' => 'اگر obfs غیر از [plain] است، پارامترها را برای اختفای ترافیک پر کنید؛
اگر obfs [http_simple] است، پیشنهاد می‌شود پورت 80 باشد؛
اگر obfs [tls] است، پیشنهاد می‌شود پورت 443 باشد;',
            'additional_ports_hint' => 'اگر فعال شده است، لطفا <span class="red-700"><a href="javascript:showTnc();">additional_ports</a></span> را در سرور پیکربندی کنید',
            'v2_method_hint' => 'با پروتکل انتقال WebSocket از none استفاده نکنید',
            'v2_net_hint' => 'با پروتکل انتقال WebSocket، TLS را فعال کنید',
            'v2_cover' => [
                'none' => 'بدون اختفا',
                'http' => 'جریان داده HTTP',
                'srtp' => 'داده تماس ویدیویی (SRTP)',
                'utp' => 'داده دانلود BT (uTP)',
                'wechat' => 'تماس ویدیویی WeChat',
                'dtls' => 'بسته‌های داده DTLS 1.2',
                'wireguard' => 'بسته‌های داده WireGuard',
            ],
            'v2_host_hint' => 'برای HTTP، چندین دامنه با "," جدا شوند. تنها یکی برای WebSocket مجاز است.',
            'v2_tls_provider_hint' => 'پیکربندی متفاوت برای پشته‌های مختلف:',
            'single_hint' => 'پورت 80/443 توصیه می‌شود. پشته نیاز به <br> پیکربندی حالت سختگیرانه دارد: فقط اتصال از طریق پورت‌های مشخص‌شده. (<a href="javascript:showPortsOnlyConfig();">چگونگی پیکربندی</a>)',
        ],
        'proxy_info' => '*سازگاری با SS',
        'proxy_info_hint' => 'برای سازگاری، لطفا <span class="red-700">_compatible</span> را به پروتکل و رمزگذاری در پیکربندی سرور اضافه کنید',
        'reload' => 'بارگذاری مجدد پشته',
        'auth' => [
            'title' => 'فهرست مجوزهای API <small>وب‌ای‌پی‌آی</small>',
            'deploy' => [
                'title' => 'استقرار پشته :type_label',
                'attribute' => 'استقرار پشته',
                'command' => 'دستورالعمل‌ها',
                'update' => 'به‌روزرسانی',
                'uninstall' => 'حذف نصب',
                'start' => 'راه‌اندازی',
                'stop' => 'توقف',
                'status' => 'وضعیت',
                'recent_logs' => 'لاگ‌های اخیر',
                'real_time_logs' => 'لاگ‌های بلادرنگ',
                'restart' => 'راه‌اندازی مجدد',
                'same' => 'همان بالا',
                'trojan_hint' => 'لطفا ابتدا <a href=":url" target="_blank">دامنه نود</a> را پر کنید و دامنه را به IP نود تعلق دهید',
            ],
            'reset_auth' => 'تنظیم مجدد کلید',
            'counts' => 'تعداد کل مجوزها <code>:num</code>',
            'generating_all' => 'مجوز برای همه نودها تولید شود؟',
        ],
        'cert' => [
            'title' => 'گواهی‌نامه‌های دامنه <small>(برای جعل هویت نود V2Ray)</small>',
            'counts' => 'تعداد کل گواهی‌نامه‌ها <code>:num</code>',
            'key_placeholder' => 'KEY گواهی‌نامه دامنه. خالی مجاز است، VNET-V2Ray از گواهی‌نامه خودکار پشتیبانی می‌کند',
            'pem_placeholder' => 'PEM گواهی‌نامه دامنه. خالی مجاز است، VNET-V2Ray از گواهی‌نامه خودکار پشتیبانی می‌کند',
        ],
    ],
    'hint' => 'نکته',
    'oauth' => [
        'title' => 'مجوزهای OAuth کاربر',
        'counts' => 'تعداد کل مجوزها <code>:num</code>',
    ],
    'select_all' => 'انتخاب همه',
    'clear' => 'پاک کردن',
    'unselected_hint' => 'برای اختصاص، اینجا جستجو کنید',
    'selected_hint' => 'اختصاص یافته، اینجا جستجو کنید',
    'clone' => 'کلون',
    'monitor' => [
        'daily_chart' => 'ترافیک روزانه',
        'monthly_chart' => 'ترافیک ماهانه',
        'node' => 'ترافیک نود',
        'user' => 'ترافیک کاربر',
        'hint' => '<strong>نکته:</strong> اگر داده‌ای وجود ندارد، لطفا وظایف زمانبندی‌شده را بررسی کنید',
    ],
    'tools' => [
        'analysis' => [
            'title' => 'تجزیه و تحلیل لاگ SSR <small>فقط برای یک نود</small>',
            'req_url' => 'آدرس‌های درخواستی اخیر',
            'not_enough' => 'کمتر از 15000 رکورد، قادر به تجزیه و تحلیل نیست',
        ],
        'convert' => [
            'title' => 'تبدیل قالب <small>از SS به SSR</small>',
            'content_placeholder' => 'لطفا پیکربندی برای تبدیل را وارد کنید',
        ],
        'decompile' => [
            'title' => 'دکومپایل <small>اطلاعات پیکربندی</small>',
            'attribute' => 'دکومپایل',
            'content_placeholder' => 'لطفا لینک‌های SSR را برای دکومپایل، هر کدام در یک سطر، وارد کنید',
        ],
    ],
    'ticket' => [
        'title' => 'تیکت‌ها',
        'counts' => 'تعداد کل تیکت‌ها <code>:num</code>',
        'send_to' => 'لطفا جزئیات کاربر هدف را وارد کنید',
        'user_info' => 'اطلاعات کاربر',
        'inviter_info' => 'اطلاعات دعوت‌کننده',
        'close_confirm' => 'تأیید می‌کنید که تیکت بسته شود؟',
        'error' => 'خطای ناشناخته! لطفا لاگ‌ها را بررسی کنید',
    ],
    'logs' => [
        'subscribe' => 'لیست اشتراک',
        'counts' => 'تعداد کل رکوردها <code>:num</code>',
        'rule' => [
            'clear_all' => 'پاک‌کردن همه رکوردها',
            'title' => 'رکوردهای فعال‌سازی',
            'name' => 'قانون فعال‌ساز',
            'reason' => 'دلیل فعال‌سازی',
            'created_at' => 'زمان فعال‌سازی',
            'tag' => '✅ دسترسی غیرمجاز',
            'clear_confirm' => 'تأیید می‌کنید که همه رکوردها پاک شوند؟',
        ],
        'order' => [
            'title' => 'لیست سفارشات',
            'is_expired' => 'منقضی‌شده',
            'is_coupon' => 'استفاده از کوپن',
        ],
        'user_traffic' => [
            'title' => 'رکوردهای مصرف داده',
            'choose_node' => 'انتخاب نود',
        ],
        'user_data_modify_title' => 'رکوردهای تغییر داده',
        'callback' => 'لاگ‌های بازخوانی <small>(پرداخت)</small>',
        'notification' => 'لاگ‌های ایمیل',
        'ip_monitor' => 'آی‌پی‌های آنلاین <small>بلادرنگ 2 دقیقه</small>',
        'user_ip' => [
            'title' => 'لیست آی‌پی‌های آنلاین کاربران <small>10 دقیقه گذشته</small>',
            'connect' => 'آی‌پی متصل‌شده',
        ],
        'ban' => [
            'title' => 'رکوردهای مسدودسازی کاربر',
            'time' => 'مدت‌زمان',
            'reason' => 'دلیل',
            'ban_time' => 'زمان مسدودسازی',
            'last_connect_at' => 'آخرین زمان ورود',
        ],
        'credit_title' => 'رکوردهای تغییر موجودی',
    ],
    'start_time' => 'ابتدا',
    'end_time' => 'انتها',
    'goods' => [
        'title' => 'فهرست محصولات',
        'type' => [
            'top_up' => 'شارژ',
            'package' => 'بسته داده',
            'plan' => 'طرح اشتراک',
        ],
        'info' => [
            'type_hint' => 'طرح اشتراک با تاریخ انقضای حساب ارتباط دارد، بسته داده فقط از داده کسر می‌کند و بر تاریخ انقضا تأثیر ندارد',
            'period_hint' => 'داده بسته هر N روز تنظیم مجدد می‌شود',
            'limit_num_hint' => 'حداکثر تعداد خرید برای هر کاربر، 0 برای نامحدود',
            'available_date_hint' => 'پس از انقضا از داده کل کسر می‌شود',
            'desc_placeholder' => 'توضیح مختصر',
            'list_placeholder' => 'اضافه کردن محتوای سفارشی',
            'list_hint' => 'هر خط را با <code><li></code> شروع کنید و با <code></li></code> تمام کنید',
        ],
        'status' => [
            'yes' => 'در فروش',
            'no' => 'از فروش خارج',
        ],
        'sell_and_used' => 'استفاده‌شده / فروش‌رفته',
        'counts' => 'تعداد کل محصولات <code>:num</code>',
    ],
    'sort_asc' => 'اولویت بالاتر با مقدار بزرگتر',
    'yes' => 'بله',
    'no' => 'خیر',
    'rule' => [
        'type' => [
            'reg' => 'عبارت منظم',
            'domain' => 'دامنه',
            'ip' => 'آی‌پی',
            'protocol' => 'پروتکل',
        ],
        'counts' => 'تعداد کل قوانین <code>:num</code>',
        'title' => 'فهرست قوانین',
        'group' => [
            'type' => [
                'off' => 'مسدودسازی',
                'on' => 'رهاسازی',
            ],
            'title' => 'گروه‌های قانون',
            'counts' => 'تعداد کل گروه‌ها <code>:num</code>',
        ],
    ],
    'role' => [
        'name_hint' => 'شناسه منحصربفرد، مثلا: admin',
        'description_hint' => 'نام نمایشی، مثلا: مدیر',
        'title' => 'فهرست نقش‌ها',
        'permissions_all' => 'همه مجوزها',
        'counts' => 'تعداد کل نقش‌ها <code>:num</code>',
    ],
    'report' => [
        'monthly_accounting' => 'حسابداری ماهانه',
        'annually_accounting' => 'حسابداری سالانه',
        'historic_accounting' => 'حسابداری تاریخی',
        'current_month' => 'این ماه',
        'last_month' => 'ماه گذشته',
        'current_year' => 'امسال',
        'last_year' => 'سال گذشته',
        'hourly_traffic' => 'ترافیک ساعتی',
        'daily_traffic' => 'ترافیک روزانه',
        'today' => 'امروز',
    ],
    'permission' => [
        'title' => 'فهرست مجوزها',
        'description_hint' => 'توضیح، مثلا: [سیستم X] ویرایش A',
        'name_hint' => 'نام مسیر، مثلا: admin.permission.create',
        'counts' => 'تعداد کل مجوزها <code>:num</code>',
    ],
    'marketing' => [
        'email' => [
            'title' => 'لیست ایمیل‌های ارسالی',
            'group_send' => 'ارسال دسته‌جمعی ایمیل',
            'counts' => 'تعداد کل پیام‌ها <code>:num</code>',
        ],
        'send_status' => 'وضعیت ارسال',
        'send_time' => 'زمان ارسال',
        'error_message' => 'پیام خطا',
        'push' => [
            'title' => 'فهرست اعلان‌های ارسالی',
            'send' => 'ارسال اعلان',
            'counts' => 'تعداد کل پیام‌های ارسالی <code>:num</code>',
        ],
    ],
    'creating' => 'در حال اضافه‌کردن...',
    'article' => [
        'type' => [
            'knowledge' => 'مقاله',
            'announcement' => 'اعلان',
        ],
        'category_hint' => 'دسته‌بندی یکسان در یک پوشه گروه‌بندی می‌شوند',
        'logo_hint' => 'اندازه توصیه‌شده: 100x75',
        'title' => 'فهرست مقالات',
        'counts' => 'تعداد کل مقالات <code>:num</code>',
    ],
    'coupon' => [
        'title' => 'فهرست کوپن‌ها',
        'name_hint' => 'برای نمایش',
        'sn_hint' => 'برای ارائه به کاربران، خالی بگذارید برای کد 8 رقمی تصادفی',
        'type' => [
            'voucher' => 'کوپن',
            'discount' => 'تخفیف',
            'charge' => 'شارژ',
        ],
        'type_hint' => 'کسر: کسر مبلغ؛ تخفیف: درصد تخفیف؛ شارژ: اضافه‌کردن مبلغ به موجودی',
        'value' => '{1} ➖ :num|{2} :num٪ تخفیف|{3} ➕ :num',
        'value_hint' => 'محدوده 1٪ ~ 99٪',
        'priority_hint' => 'بالاترین اولویت واجد شرایط استفاده می‌شود. حداکثر 255',
        'minimum_hint' => 'فقط هنگامی‌که پرداخت بیش از <strong>:num</strong> باشد قابل استفاده است',
        'used_hint' => 'هر کاربر می‌تواند حداکثر <strong>:num</strong> بار از این کوپن استفاده کند',
        'levels_hint' => 'فقط برای سطوح کاربری انتخاب‌شده قابل استفاده است',
        'groups_hint' => 'فقط برای گروه‌های کاربری انتخاب‌شده قابل استفاده است',
        'users_placeholder' => 'وارد کردن شناسه کاربر، سپس Enter',
        'user_whitelist_hint' => 'کاربران مرتبط می‌توانند از این کوپن استفاده کنند، خالی بگذارید اگر استفاده نمی‌شود',
        'users_blacklist_hint' => 'کاربران مرتبط نمی‌توانند از این کوپن استفاده کنند، خالی بگذارید اگر استفاده نمی‌شود',
        'services_placeholder' => 'وارد کردن شناسه محصول، سپس Enter',
        'services_whitelist_hint' => 'فقط برای محصولات سفیدلیست‌شده قابل استفاده است، خالی بگذارید اگر استفاده نمی‌شود',
        'services_blacklist_hint' => 'برای محصولات بلک‌لیست‌شده غیرقابل استفاده است، خالی بگذارید اگر استفاده نمی‌شود',
        'newbie' => [
            'first_discount' => 'اولین تخفیف',
            'first_order' => 'اولین سفارش',
            'created_days' => 'سن حساب',
        ],
        'created_days_hint' => '<code>:days</code> روز پس از ثبت‌نام',
        'limit_hint' => 'قوانین رابطه <strong>و</strong> دارند، درست استفاده کنید',
        'info_title' => 'اطلاعات کوپن',
        'counts' => 'تعداد کل کوپن‌ها <code>:num</code>',
        'discount' => 'تخفیف',
        'export_title' => 'صدور کوپن‌ها',
        'single_use' => 'یک‌بار مصرف',
    ],
    'times' => 'بار',
    'massive_export' => 'صدور دسته‌جمعی',
    'system_generate' => 'تولیدشده توسط سیستم',
    'aff' => [
        'rebate_title' => 'سوابق بازگشت درآمد',
        'counts' => 'تعداد کل درخواست‌ها <code>:num</code>',
        'title' => 'فهرست درخواست‌های برداشت',
        'apply_counts' => 'تعداد کل درخواست‌ها <code>:num</code>',
        'referral' => 'بازگشت درآمد معرفی‌شده',
        'commission_title' => 'جزئیات درخواست',
        'commission_counts' => 'شامل <code>:num</code> سفارش',
    ],
    'setting' => [
        'common' => [
            'title' => 'تنظیمات عمومی',
            'set_default' => 'تنظیم به‌عنوان پیش‌فرض',
            'connect_nodes' => 'تعداد نودهای مرتبط',
        ],
        'email' => [
            'title' => 'فیلتر ایمیل <small>(برای ثبت‌نام)</small>',
            'tail' => 'پسوند ایمیل',
            'rule' => 'نوع محدودیت',
            'black' => 'لیست سیاه',
            'white' => 'لیست سفید',
            'tail_placeholder' => 'وارد کردن پسوند ایمیل',
        ],
        'system' => [
            'title' => 'تنظیمات سیستم',
            'web' => 'عمومی',
            'account' => 'حساب',
            'node' => 'نود',
            'extend' => 'پیشرفته',
            'check_in' => 'حضور و غیاب',
            'promotion' => 'تبلیغات',
            'notify' => 'اعلان‌رسانی',
            'auto_job' => 'خودکارسازی',
            'other' => 'لوگو|پشتیبانی|تحلیل',
            'payment' => 'پرداخت',
            'menu' => 'منو',
        ],
        'no_permission' => 'مجوز تغییر تنظیمات را ندارید!',
    ],
    'system' => [
        'account_expire_notification' => 'اعلان انقضای حساب',
        'active_times' => 'حداکثر فعال‌سازی حساب',
        'admin_invite_days' => '[مدیر] مهلت دعوت‌نامه',
        'aff_salt' => '[لینک معرفی] رمزگذاری شناسه کاربر',
        'alipay_qrcode' => 'کد QR علی‌پی',
        'AppStore_id' => '[Apple] حساب',
        'AppStore_password' => '[Apple] رمزعبور',
        'auto_release_port' => 'بازیابی پورت',
        'bark_key' => '[Bark] کلید دستگاه',
        'captcha_key' => 'کلید کپچا',
        'captcha_secret' => 'رمزعبور/شناسه کپچا',
        'codepay_id' => '[کدپرداخت] شناسه',
        'codepay_key' => '[کدپرداخت] کلید',
        'codepay_url' => '[کدپرداخت] آدرس',
        'data_anomaly_notification' => 'اعلان ناهنجاری داده',
        'data_exhaust_notification' => 'اعلان تمام‌شدن داده',
        'ddns_key' => '[DNS] کلید',
        'ddns_mode' => 'حالت همگام‌سازی DNS',
        'ddns_secret' => '[DNS] رمز',
        'default_days' => 'مدت پیش‌فرض حساب',
        'default_traffic' => 'داده اولیه پیش‌فرض',
        'detection_check_times' => 'اعلان‌های مسدودسازی نود',
        'dingTalk_access_token' => '[دینگتاک] توکن دسترسی',
        'dingTalk_secret' => '[دینگتاک] رمز',
        'epay_key' => '[ای‌پی] کلید',
        'epay_mch_id' => '[ای‌پی] شناسه بازرگان',
        'epay_url' => '[ای‌پی] آدرس',
        'expire_days' => 'آستانه اعلان انقضا',
        'f2fpay_app_id' => 'شناسه برنامه',
        'f2fpay_private_key' => 'کلید خصوصی',
        'f2fpay_public_key' => 'کلید عمومی',
        'forbid_mode' => 'محدودیت دسترسی',
        'invite_num' => 'تعداد پیش‌فرض دعوت‌نامه',
        'is_activate_account' => 'فعال‌سازی حساب',
        'is_AliPay' => 'پرداخت علی‌پی',
        'is_ban_status' => 'مسدودسازی خودکار با انقضا',
        'is_captcha' => 'حالت کپچا',
        'is_checkin' => 'پاداش حضور و غیاب',
        'is_clear_log' => 'پاک‌سازی خودکار لاگ‌ها',
        'is_custom_subscribe' => 'اشتراک پیشرفته',
        'is_email_filtering' => 'فیلتر ایمیل',
        'is_forbid_robot' => 'مسدود کردن ربات‌ها',
        'is_free_code' => 'کد دعوت رایگان',
        'is_invite_register' => 'ثبت‌نام با دعوت‌نامه',
        'is_otherPay' => 'پرداخت سفارشی',
        'is_QQPay' => 'پرداخت کیو‌کیو',
        'is_rand_port' => 'پورت تصادفی',
        'is_register' => 'ثبت‌نام',
        'is_subscribe_ban' => 'مسدودسازی خودکار درخواست اشتراک',
        'is_traffic_ban' => 'مسدودسازی خودکار به دلیل مصرف بی‌رویه',
        'is_WeChatPay' => 'پرداخت وی‌چت',
        'iYuu_token' => 'توکن ای‌یو',
        'maintenance_content' => 'متن نگهداری',
        'maintenance_mode' => 'حالت نگهداری',
        'maintenance_time' => 'زمان پایان نگهداری',
        'min_port' => 'محدوده پورت',
        'min_rand_traffic' => 'محدوده داده',
        'node_blocked_notification' => 'اعلان مسدودشدن نود',
        'node_daily_notification' => 'گزارش روزانه نود',
        'node_offline_notification' => 'اعلان آفلاین‌شدن نود',
        'oauth_path' => 'مسیرهای OAuth',
        'offline_check_times' => 'تعداد تلاش‌های آفلاین',
        'password_reset_notification' => 'اعلان تنظیم مجدد رمزعبور',
        'paybeaver_app_id' => 'شناسه برنامه',
        'paybeaver_app_secret' => 'رمز برنامه',
        'payjs_key' => 'کلید ارتباطی',
        'payjs_mch_id' => 'شماره بازرگان',
        'payment_confirm_notification' => 'اعلان تأیید پرداخت دستی',
        'payment_received_notification' => 'اعلان دریافت پرداخت',
        'paypal_app_id' => 'شناسه برنامه',
        'paypal_client_id' => 'شناسه مشتری',
        'paypal_client_secret' => 'کلید مخفی مشتری',
        'pushDeer_key' => 'کلید پوش‌دیر',
        'pushplus_token' => 'توکن پوش‌پلاس',
        'rand_subscribe' => 'اشتراک تصادفی',
        'redirect_url' => 'آدرس تغییرمسیر',
        'referral_money' => 'حداقل مبلغ برداشت',
        'referral_percent' => 'درصد بازگشت درآمد',
        'referral_status' => 'وضعیت تبلیغات',
        'referral_traffic' => 'ترافیک ثبت‌نامی',
        'referral_type' => 'حالت بازگشت درآمد',
        'register_ip_limit' => 'محدودیت IP ثبت‌نام',
        'reset_password_times' => 'تعداد تنظیم مجدد رمزعبور',
        'reset_traffic' => 'تنظیم مجدد خودکار داده',
        'server_chan_key' => 'کلید سرورچن',
        'standard_currency' => 'واحد پول پایه',
        'stripe_public_key' => 'کلید عمومی',
        'stripe_secret_key' => 'کلید مخفی',
        'stripe_signing_secret' => 'کلید امضای وب‌هوک',
        'subject_name' => 'نام سفارشی کالا',
        'subscribe_ban_times' => 'آستانه درخواست اشتراک',
        'subscribe_domain' => 'آدرس اشتراک نود',
        'subscribe_max' => 'حداکثر تعداد نودهای اشتراک',
        'telegram_token' => 'توکن تلگرام',
        'tg_chat_token' => 'توکن تی‌جی‌چت',
        'theadpay_key' => 'کلید بازرگان',
        'theadpay_mchid' => 'شناسه بازرگان',
        'theadpay_url' => 'آدرس',
        'ticket_closed_notification' => 'اعلان بستن تیکت',
        'ticket_created_notification' => 'اعلان ایجاد تیکت',
        'ticket_replied_notification' => 'اعلان پاسخ تیکت',
        'traffic_ban_time' => 'مدت مسدودسازی',
        'traffic_ban_value' => 'آستانه مصرف بی‌رویه',
        'traffic_limit_time' => 'فاصله زمانی',
        'traffic_warning_percent' => 'آستانه اخطار مصرف',
        'trojan_license' => 'مجوز تروجان',
        'username_type' => 'نوع نام‌کاربری',
        'user_invite_days' => '[کاربر] مهلت دعوت‌نامه',
        'v2ray_license' => 'مجوز وی‌توری',
        'v2ray_tls_provider' => 'پیکربندی TLS وی‌توری',
        'webmaster_email' => 'ایمیل مدیر',
        'website_analytics' => 'کد تحلیل وبسایت',
        'website_callback_url' => 'آدرس بازخوانی پرداخت',
        'website_customer_service' => 'کد پشتیبانی وبسایت',
        'website_home_logo' => 'لوگوی صفحه اصلی',
        'website_logo' => 'لوگوی داخلی',
        'website_name' => 'نام وبسایت',
        'website_security_code' => 'کد امنیتی',
        'website_url' => 'آدرس وبسایت',
        'web_api_url' => 'آدرس API',
        'wechat_aid' => 'شناسه برنامه وی‌چت',
        'wechat_cid' => 'شناسه سازمانی وی‌چت',
        'wechat_encodingAESKey' => 'کلید رمزنگاری',
        'wechat_qrcode' => 'کد QR وی‌چت',
        'wechat_secret' => 'رمز برنامه وی‌چت',
        'wechat_token' => 'توکن برنامه وی‌چت',
        'hint' => [
            'account_expire_notification' => 'اعلان انقضای حساب',
            'active_times' => 'ظرف 24 ساعت از طریق ایمیل',
            'admin_invite_days' => 'مدت اعتبار دعوت‌نامه مدیر',
            'aff_salt' => 'رمزگذاری لینک معرفی',
            'AppStore_id' => 'در مقالات استفاده می‌شود',
            'AppStore_password' => 'در مقالات استفاده می‌شود',
            'auto_release_port' => 'پورت حساب‌های مسدود شده/منقضی شده پس از <code>'.config('tasks.release_port').'</code> روز به صورت خودکار آزاد می‌شود',
            'bark_key' => 'برای ارسال به دستگاه iOS',
            'captcha_key' => '<a href="https://proxypanel.gitbook.io/wiki/captcha" target="_blank">راهنمای تنظیمات</a>',
            'data_anomaly_notification' => 'اگر ظرف 1 ساعت از حد مجاز بیشتر باشد',
            'data_exhaust_notification' => 'هنگام تمام‌شدن داده',
            'ddns_key' => "<a href='https://proxypanel.gitbook.io/wiki/ddns' target='_blank'>راهنمای تنظیمات</a>",
            'ddns_mode' => 'همگام‌سازی دامنه و IP',
            'default_days' => 'مدت پیش‌فرض حساب جدید، 0 به معنی امروز منقضی می‌شود',
            'default_traffic' => 'داده پیش‌فرض حساب جدید',
            'detection_check_times' => 'پس از N بار 0 تا 12',
            'dingTalk_access_token' => '<a href="https://open.dingtalk.com/document/group/custom-robot-access#title-jfe-yo9-jl2" target="_blank">دفترچه راهنمای دینگتاک</a>',
            'dingTalk_secret' => 'لازم است اگر امضا فعال باشد',
            'expire_days' => 'شروع اعلان انقضای حساب',
            'f2fpay_app_id' => 'شناسه برنامه',
            'f2fpay_private_key' => 'کلید خصوصی تولیدشده',
            'f2fpay_public_key' => 'کلید عمومی برنامه نیست!',
            'forbid_mode' => 'مناطق مشخص‌شده مسدود می‌شوند',
            'invite_num' => 'پیش‌فرض هر کاربر',
            'is_activate_account' => 'نیاز به فعال‌سازی از طریق ایمیل',
            'is_ban_status' => 'حساب را مسدود می‌کند و داده‌ها را پاک می‌کند',
            'is_captcha' => 'نیاز به کپچا برای ورود/ثبت‌نام',
            'is_checkin' => 'پاداش تصادفی هنگام حضور و غیاب',
            'is_clear_log' => 'پاک‌سازی خودکار لاگ‌های بی‌استفاده',
            'is_custom_subscribe' => 'نمایش تاریخ انقضا و داده باقیمانده',
            'is_email_filtering' => 'لیست سیاه و سفید ایمیل مجاز',
            'is_forbid_robot' => 'خطای 404 برای ربات‌ها',
            'is_free_code' => 'مخفی‌کردن کدهای رایگان',
            'is_rand_port' => 'پورت تصادفی هنگام ثبت‌نام',
            'is_register' => 'غیرفعال‌کردن ثبت‌نام',
            'is_subscribe_ban' => 'مسدودسازی خودکار در صورت درخواست بیش از حد',
            'is_traffic_ban' => 'مسدودسازی خدمات در صورت مصرف بی‌رویه',
            'iYuu_token' => 'پس از دریافت <a href="https://iyuu.cn" target="_blank">توکن ای‌یو</a>',
            'maintenance_content' => 'متن سفارشی نگهداری',
            'maintenance_mode' => "تغییر مسیر کاربران | مدیر ورود از <a href='javascript:(0)'>:url</a>",
            'maintenance_time' => 'برای شمارش معکوس',
            'min_port' => '1000 - 65535',
            'node_blocked_notification' => 'اعلان مسدودشدن نود در هر ساعت',
            'node_daily_notification' => 'گزارش روزانه مصرف نودها',
            'node_offline_notification' => 'اعلان آفلاین‌شدن نودها',
            'oauth_path' => 'لطفا ابتدا در .ENV فعال کنید',
            'offline_check_times' => 'توقف اعلان پس از N بار در 24 ساعت',
            'password_reset_notification' => 'امکان تنظیم مجدد رمزعبور از طریق ایمیل',
            'paybeaver_app_id' => '<a href="https://merchant.paybeaver.com/" target="_blank">مرکز بازرگان</a> -> توسعه‌دهنده -> شناسه برنامه',
            'paybeaver_app_secret' => '<a href="https://merchant.paybeaver.com/" target="_blank">مرکز بازرگان</a> -> توسعه‌دهنده -> رمز برنامه',
            'payjs_mch_id' => '<a href="https://payjs.cn/dashboard/member" target="_blank">از اینجا</a>',
            'payment_confirm_notification' => 'اعلان به مدیر برای پردازش سفارشات دستی',
            'payment_received_notification' => 'اعلان دریافت پرداخت به کاربر',
            'pushDeer_key' => 'پس از دریافت <a href="https://www.pushdeer.com/official.html" target="_blank">کلید پوش‌دیر</a>',
            'pushplus_token' => 'پس از دریافت <a href="https://www.pushplus.plus/push1.html" target="_blank">توکن پوش‌پلاس</a>',
            'rand_subscribe' => 'ترتیب تصادفی به جای ترتیب نود',
            'redirect_url' => 'تغییرمسیر به این آدرس هنگام فعال‌شدن قوانین',
            'referral_money' => 'حداقل مبلغ قابل برداشت',
            'referral_percent' => 'درصد سفارش برای معرف',
            'referral_status' => 'غیرفعال‌کردن سیستم معرفی',
            'referral_traffic' => 'ترافیک رایگان با ثبت‌نام از طریق معرفی',
            'referral_type' => 'بازگشت درآمد جدید بر اساس حالت جدید',
            'register_ip_limit' => 'تعداد ثبت‌نام مجاز در 24 ساعت، 0 برای نامحدود',
            'reset_password_times' => 'تعداد مجاز تنظیم مجدد رمزعبور در 24 ساعت',
            'reset_traffic' => 'تنظیم مجدد خودکار بر اساس دوره طرح کاربر',
            'server_chan_key' => 'پس از دریافت <a href="https://sc.ftqq.com" target="_blank">کلید سرورچن</a>',
            'standard_currency' => 'واحد پول پیش‌فرض سایت',
            'subject_name' => 'نام سفارشی محصول در درگاه‌ها',
            'subscribe_ban_times' => 'حداکثر تعداد درخواست اشتراک در 24 ساعت',
            'subscribe_domain' => 'شروع با http:// یا https:// برای جلوگیری از شکست DNS',
            'subscribe_max' => 'حداکثر تعداد نودهای بازگشتی، 0 برای همه',
            'telegram_token' => 'دریافت <a href="https://t.me/BotFather" target="_blank">توکن ربات</a> از @BotFather',
            'tg_chat_token' => 'پس از دریافت <a href="https://t.me/realtgchat_bot" target="_blank">توکن تی‌جی‌چت</a>',
            'ticket_closed_notification' => 'اعلان بسته‌شدن به کاربر',
            'ticket_created_notification' => 'بسته به ایجادکننده، اعلان به مدیر/کاربر',
            'ticket_replied_notification' => 'اعلان پاسخ به طرف مقابل',
            'traffic_ban_time' => 'مدت زمان مسدودسازی خودکار',
            'traffic_ban_value' => 'آستانه مصرف غیرمجاز در 1 ساعت',
            'traffic_limit_time' => 'فاصله زمانی بین حضور و غیاب‌ها',
            'traffic_warning_percent' => 'اعلان تمام‌شدن داده هنگام رسیدن به این درصد',
            'username_type' => 'نوع پیش‌فرض نام‌کاربری',
            'user_invite_days' => 'مدت اعتبار دعوت‌نامه کاربر',
            'v2ray_tls_provider' => 'تنظیمات نود ارجح است',
            'webmaster_email' => 'نمایش در خطاها',
            'website_analytics' => 'کد JavaScript تحلیلگر',
            'website_callback_url' => 'جلوگیری از شکست بازخوانی به دلیل DNS',
            'website_customer_service' => 'کد JavaScript پشتیبانی',
            'website_name' => 'نام نمایشی در ایمیل',
            'website_security_code' => 'در صورت تنظیم، ورود فقط از <a href=":url" target="_blank">ورود امن</a>',
            'website_url' => 'آدرس اصلی برای لینک‌ها',
            'web_api_url' => 'مثلا '.config('app.url'),
            'wechat_aid' => 'در <a href="https://work.weixin.qq.com/wework_admin/frame#apps" target="_blank">مدیریت برنامه</a>',
            'wechat_cid' => '<a href="https://work.weixin.qq.com/wework_admin/frame#profile" target="_blank">اطلاعات سازمان</a>',
            'wechat_encodingAESKey' => 'تنظیمات API دریافتی',
            'wechat_secret' => 'ممکن است نیاز به برنامه سازمانی باشد',
            'wechat_token' => 'تنظیمات API، آدرس بازخوانی: :url',
        ],
        'placeholder' => [
            'default_url' => ':url پیش‌فرض',
            'server_chan_key' => 'پرکردن کلید سرورچن و کلیک بروزرسانی',
            'pushDeer_key' => 'پرکردن کلید پوش‌دیر و کلیک بروزرسانی',
            'iYuu_token' => 'پرکردن توکن ای‌یو و کلیک بروزرسانی',
            'bark_key' => 'پرکردن کلید دستگاه بارک و کلیک بروزرسانی',
            'telegram_token' => 'پرکردن توکن تلگرام و کلیک بروزرسانی',
            'pushplus_token' => 'لطفا از سرورچن درخواست کنید',
            'dingTalk_access_token' => 'توکن دسترسی ربات سفارشی',
            'dingTalk_secret' => 'رمز پس از فعال‌سازی امضای ربات',
            'wechat_aid' => 'شناسه برنامه سازمانی وی‌چت',
            'wechat_cid' => 'پر کردن شناسه وی‌چت و کلیک بروزرسانی',
            'wechat_secret' => 'رمز برنامه سازمانی وی‌چت',
            'tg_chat_token' => 'لطفا از تلگرام درخواست کنید',
            'codepay_url' => 'https://codepay.fateqq.com/create_order/?',
        ],
        'payment' => [
            'attribute' => 'تنظیمات پرداخت',
            'channel' => [
                'alipay' => 'پرداخت آنلاین علی‌پی',
                'codepay' => 'کدپرداخت',
                'epay' => 'ای‌پی',
                'payjs' => 'پی‌جی‌اس',
                'paypal' => 'پی‌پال',
                'stripe' => 'استرایپ',
                'paybeaver' => 'پی‌بیور',
                'theadpay' => 'تی‌هدپی',
                'manual' => 'پرداخت دستی',
            ],
            'hint' => [
                'alipay' => 'نیاز به مجوز از <a href="https://open.alipay.com/platform/appManage.htm?#/create/" target="_blank">درگاه آنت فایننشل</a>',
                'codepay' => 'ثبت‌نام در <a href="https://codepay.fateqq.com/i/377289" target="_blank">کدپرداخت</a> و دانلود نرم‌افزار',
                'payjs' => 'ثبت‌نام در <a href="https://payjs.cn/ref/zgxjnb" target="_blank">پی‌جی‌اس</a>',
                'paypal' => 'ورود به <a href="https://www.paypal.com/businessprofile/mytools/apiaccess/firstparty" target="_blank">صفحه اعتبارنامه API</a> و دریافت اطلاعات',
                'paybeaver' => 'ثبت‌نام در <a href="https://merchant.paybeaver.com/?aff_code=iK4GNuX8" target="_blank">پی‌بیور</a>',
                'theadpay' => 'درخواست حساب از <a href="https://theadpay.com/" target="_blank">تی‌هدپی</a>',
                'manual' => 'پس از تنظیم درگاه، در سمت کاربر نمایش داده می‌شود',
            ],
        ],
        'notification' => [
            'channel' => [
                'telegram' => 'تلگرام',
                'wechat' => 'وی‌چت سازمانی',
                'dingtalk' => 'دینگتاک',
                'email' => 'ایمیل',
                'bark' => 'بارک',
                'serverchan' => 'سرورچن',
                'pushdeer' => 'پوش‌دیر',
                'pushplus' => 'پوش‌پلاس',
                'iyuu' => 'ای‌یو',
                'tg_chat' => 'تی‌جی‌چت',
                'site' => 'اعلان سایت',
            ],
            'send_test' => 'ارسال پیام آزمایشی',
        ],
        'forbid' => [
            'mainland' => 'مسدودسازی ایران',
            'china' => 'مسدودسازی چین',
            'oversea' => 'مسدودسازی خارج از کشور',
        ],
        'username' => [
            'email' => 'ایمیل',
            'mobile' => 'شماره موبایل',
            'any' => 'هر نام‌کاربری',
        ],
        'active_account' => [
            'before' => 'فعال‌سازی قبل از ثبت‌نام',
            'after' => 'فعال‌سازی بعد از ثبت‌نام',
        ],
        'ddns' => [
            'namesilo' => 'نیم‌سیلو',
            'aliyun' => 'علی‌کلود',
            'dnspod' => 'دی‌ان‌اس‌پاد',
            'cloudflare' => 'کلودفلر',
        ],
        'captcha' => [
            'standard' => 'کپچای استاندارد',
            'geetest' => 'جی‌تست',
            'recaptcha' => 'ری‌کپچای گوگل',
            'hcaptcha' => 'اچ‌کپچا',
            'turnstile' => 'Turnstile',
        ],
        'referral' => [
            'once' => 'بازگشت درآمد اولین خرید',
            'loop' => 'بازگشت درآمد همیشگی',
        ],
    ],
    'set_to' => ':attribute را به :attribute تنظیم کن',
    'minute' => 'دقیقه',
    'query' => 'جستجو',
    'optional' => 'اختیاری',
    'require' => 'ضروری',
];
