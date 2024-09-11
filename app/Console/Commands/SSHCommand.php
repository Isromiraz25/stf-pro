<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SSHCommand extends Command
{
    protected $signature = 'ssh:connect {user} {ip} {port}';

    protected $description = 'SSH into a server from web terminal';

    public function handle()
    {
        $user = $this->argument('user');
        $ip = $this->argument('ip');
        $port = $this->argument('port');

        $command = 'ssh ' . escapeshellarg($user) . '@' . escapeshellarg($ip) . ' -p ' . escapeshellarg($port);
        
        $this->info("Executing SSH command: $command");

        shell_exec($command);

        return 0;
    }
}
