<?php

return [
    [
        'key'        => 'dashboard',
        'name'       => 'หน้าหลัก',
        'route'      => 'admin.dashboard.index',
        'sort'       => 1,
        'icon-class' => 'fas fa-tachometer-alt',
    ],
    [
        'key'        => 'admin',
        'name'       => 'เจ้าหน้าที่',
        'route'      => 'admin.staff.index',
        'sort'       => 2,
        'icon-class' => 'fas fa-user-cog',
    ],
    [
        'key'        => 'role',
        'name'       => 'สิทธิ์',
        'route'      => 'admin.role.index',
        'sort'       => 3,
        'icon-class' => 'fas fa-user-shield',
    ],
    [
        'key'        => 'blog',
        'name'       => 'บล็อก',
        'route'      => 'admin.blog.index',
        'sort'       => 4,
        'icon-class' => 'fas fa-newspaper',
    ],
    [
        'key'        => 'blog.index',
        'name'       => 'บล็อก',
        'route'      => 'admin.blog.index',
        'sort'       => 1,
        'icon-class' => 'fas fa-newspaper',
    ],
    [
        'key'        => 'blog.category',
        'name'       => 'ประเภทบล็อก',
        'route'      => 'admin.blog.category.index',
        'sort'       => 2,
        'icon-class' => 'fas fa-newspaper',
    ],
    [
        'key'        => 'department',
        'name'       => 'แขนง',
        'route'      => 'admin.department.index',
        'sort'       => 5,
        'icon-class' => 'fas fa-list',
    ]
];
