<?php

namespace LaravelEnso\ControlPanelApi\app\Enums;

use LaravelEnso\Enums\app\Services\Enum;

class DataTypes extends Enum
{
    const Logins = 'logins';
    const Actions = 'actions';
    const FailedJobs = 'failed jobs';
    const Sessions = 'sessions';
    const Users = 'users';
    const ActiveUsers = 'active users';
    const NewUsers = 'new users';
    const ServerTime = 'server time';
    const Version = 'version';
    const LogSize = 'log size';
    const Status = 'status';
}
