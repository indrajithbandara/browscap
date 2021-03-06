<?php
/**
 * This file is part of the browscap package.
 *
 * Copyright (c) 1998-2017, Browser Capabilities Project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

return [
    0 => [
        'division' => 'DefaultProperties',
        'sortIndex' => 0,
        'lite' => true,
        'userAgents' => [
            0 => [
                'userAgent' => 'DefaultProperties',
                'properties' => [
                    'Comment' => 'DefaultProperties',
                    'Browser' => 'DefaultProperties',
                    'Version' => '0.0',
                    'MajorVer' => '0',
                    'MinorVer' => '0',
                    'Platform' => 'unknown',
                    'Platform_Version' => 'unknown',
                    'Platform_Description' => 'unknown',
                    'Alpha' => 'false',
                    'Beta' => 'false',
                    'Win16' => 'false',
                    'Win32' => 'false',
                    'Win64' => 'false',
                    'Frames' => 'false',
                    'IFrames' => 'false',
                    'Tables' => 'false',
                    'Cookies' => 'false',
                    'BackgroundSounds' => 'false',
                    'JavaScript' => 'false',
                    'VBScript' => 'false',
                    'JavaApplets' => 'false',
                    'ActiveXControls' => 'false',
                    'isMobileDevice' => 'false',
                    'isSyndicationReader' => 'false',
                    'Crawler' => 'false',
                    'CssVersion' => '0',
                    'AolVersion' => '0',
                    'Device_Name' => 'unknown',
                    'Device_Maker' => 'unknown',
                    'RenderingEngine_Name' => 'unknown',
                    'RenderingEngine_Version' => 'unknown',
                    'RenderingEngine_Description' => 'unknown',
                    'isTablet' => 'false',
                    'Device_Type' => 'unknown',
                ],
            ],
        ],
    ],
    1 => [
        'division' => 'Division3',
        'sortIndex' => 100,
        'userAgents' => [
            0 => [
                'userAgent' => 'UA3',
                'properties' => [
                    'Parent' => 'DefaultProperties',
                    'Comment' => 'UA3',
                    'Browser' => 'UA3',
                    'Version' => '3.0',
                    'MajorVer' => '3',
                    'MinorVer' => '0',
                ],
            ],
        ],
    ],
    2 => [
        'division' => 'Division2',
        'sortIndex' => 100,
        'userAgents' => [
            0 => [
                'userAgent' => 'UA2',
                'properties' => [
                    'Parent' => 'DefaultProperties',
                    'Comment' => 'UA2',
                    'Browser' => 'UA2',
                    'Version' => '2.0',
                    'MajorVer' => '2',
                    'MinorVer' => '0',
                ],
            ],
        ],
    ],
    3 => [
        'division' => 'Division1',
        'sortIndex' => 200,
        'userAgents' => [
            0 => [
                'userAgent' => 'UA1',
                'properties' => [
                    'Parent' => 'DefaultProperties',
                    'Comment' => 'UA1',
                    'Browser' => 'UA1',
                    'Version' => '1.0',
                    'MajorVer' => '1',
                    'MinorVer' => '0',
                ],
            ],
            1 => [
                'userAgent' => 'UA2',
                'properties' => [
                    'Parent' => 'DefaultProperties',
                    'lite' => 'false',
                    'Comment' => 'UA2',
                    'Browser' => 'UA2',
                    'Version' => '1.0',
                    'MajorVer' => '1',
                    'MinorVer' => '0',
                ],
            ],
            2 => [
                'userAgent' => '"UA3',
                'properties' => [
                    'Parent' => 'DefaultProperties',
                    'Comment' => 'UA3',
                    'Browser' => 'UA3',
                    'Version' => '1.0',
                    'MajorVer' => '1',
                    'MinorVer' => '0',
                ],
                'children' => [
                    [
                        'match' => "'Mozilla/?.0 (compatible; MSIE*",
                    ],
                    [
                        'match' => '"Mozilla/?.0 (compatible; MSIE*',
                    ],
                ],
            ],
            3 => [
                'userAgent' => 'UA4',
                'properties' => [
                    'Comment' => 'UA4',
                    'Browser' => 'UA4',
                    'MajorVer' => '1',
                    'MinorVer' => '0',
                    'Parent' => 'UA2',
                ],
            ],
        ],
    ],
    4 => [
        'division' => 'Default Browser',
        'sortIndex' => 2147000000,
        'lite' => true,
        'userAgents' => [
            0 => [
                'userAgent' => '*',
                'properties' => [
                    'Comment' => 'Default Browser',
                    'Browser' => 'Default Browser',
                    'Version' => '0.0',
                    'MajorVer' => '0',
                    'MinorVer' => '0',
                    'Platform' => 'unknown',
                    'Platform_Version' => 'unknown',
                    'Platform_Description' => 'unknown',
                    'Alpha' => 'false',
                    'Beta' => 'false',
                    'Win16' => 'false',
                    'Win32' => 'false',
                    'Win64' => 'false',
                    'Frames' => 'false',
                    'IFrames' => 'false',
                    'Tables' => 'false',
                    'Cookies' => 'false',
                    'BackgroundSounds' => 'false',
                    'JavaScript' => 'false',
                    'VBScript' => 'false',
                    'JavaApplets' => 'false',
                    'ActiveXControls' => 'false',
                    'isMobileDevice' => 'false',
                    'isSyndicationReader' => 'false',
                    'Crawler' => 'false',
                    'CssVersion' => '0',
                    'AolVersion' => '0',
                    'Device_Name' => 'unknown',
                    'Device_Maker' => 'unknown',
                    'RenderingEngine_Name' => 'unknown',
                    'RenderingEngine_Version' => 'unknown',
                    'RenderingEngine_Description' => 'unknown',
                    'isTablet' => 'false',
                    'Device_Type' => 'unknown',
                ],
            ],
        ],
    ],
];
