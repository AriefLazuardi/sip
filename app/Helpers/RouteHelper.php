<?php

if (!function_exists('getDashboardRoute')) {
    function getDashboardRoute()
    {
        if (auth()->user()->hasRole('administrator')) {
            return 'admin.dashboard';
        } elseif (auth()->user()->hasRole('guru')) {
            return 'guru.dashboard';
        } elseif (auth()->user()->hasRole('wakakurikulum')) {
            return 'waka.dashboard';
        }
        
        // Default route jika tidak ada yang cocok
        return 'default.dashboard';
    }
}