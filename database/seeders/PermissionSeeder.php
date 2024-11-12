<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permissions\Permission;
use App\Models\Permissions\Group;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Usuarios */
        $users = Group::firstOrCreate([
            'name' => 'Usuários'
        ]);

        Permission::firstOrCreate([ //1
            'group_id' => $users->id,
            'name' => 'user-view',
            'display_name' => 'Acesso a lista de Usuários'
        ]);

        Permission::firstOrCreate([ //2
            'group_id' => $users->id,
            'name' => 'user-create',
            'display_name' => 'Adicionar Usuários'
        ]);

        Permission::firstOrCreate([ //3
            'group_id' => $users->id,
            'name' => 'user-edit',
            'display_name' => 'Editar Usuários'
        ]);

        Permission::firstOrCreate([ //4
            'group_id' => $users->id,
            'name' => 'user-pass-update',
            'display_name' => 'Atualizar Senha de Usuários'
        ]);

        Permission::firstOrCreate([ //5
            'group_id' => $users->id,
            'name' => 'user-delete',
            'display_name' => 'Deletar Usuários'
        ]);

        Permission::firstOrCreate([ //6
            'group_id' => $users->id,
            'name' => 'user-deleted',
            'display_name' => 'Usuários Excluidos'
        ]);

        Permission::firstOrCreate([ //7
            'group_id' => $users->id,
            'name' => 'user-restore',
            'display_name' => 'Restaurar Usuários'
        ]);

        /* Papeis */
        $roles = Group::firstOrCreate([
            'name' => 'Papéis'
        ]);

        Permission::firstOrCreate([ //8
            'group_id' => $roles->id,
            'name' => 'role-view',
            'display_name' => 'Visualizar Papéis'
        ]);

        Permission::firstOrCreate([ //9
            'group_id' => $roles->id,
            'name' => 'role-edit',
            'display_name' => 'Editar Papel'
        ]);

        /* Permissoes */
        $permissions = Group::firstOrCreate([
            'name' => 'Permissões'
        ]);

        Permission::firstOrCreate([ //10
            'group_id' => $permissions->id,
            'name' => 'permission-view',
            'display_name' => 'Visualizar Permissões'
        ]);

        Permission::firstOrCreate([ //11
            'group_id' => $permissions->id,
            'name' => 'permission-edit',
            'display_name' => 'Editar Permissões'
        ]);

        Permission::firstOrCreate([ //12
            'group_id' => $permissions->id,
            'name' => 'permission-delete',
            'display_name' => 'Deletar Permissões'
        ]);


        /* Log */
        $logs = Group::firstOrCreate([
            'name' => 'Log'
        ]);

        Permission::firstOrCreate([ //13
            'group_id' => $logs->id,
            'name' => 'log-view',
            'display_name' => 'Visualizar Log'
        ]);

        Permission::firstOrCreate([ //14
            'group_id' => $logs->id,
            'name' => 'log-delete',
            'display_name' => 'Deletar Log'
        ]);

        $admins = Group::firstOrCreate([
            'name' => 'Admin'
        ]);

        Permission::firstOrCreate([ //15
            'group_id' => $admins->id,
            'name' => 'admin-menu',
            'display_name' => 'Menu Admin'
        ]);

        $companies = Group::firstOrCreate([
            'name' => 'Empresas'
        ]);

        Permission::firstOrCreate([ //16
            'group_id' => $companies->id,
            'name' => 'company-view',
            'display_name' => 'Visualizar Empresas'
        ]);

        Permission::firstOrCreate([ //17
            'group_id' => $companies->id,
            'name' => 'company-create',
            'display_name' => 'Adicionar Empresas'
        ]);

        Permission::firstOrCreate([ //18
            'group_id' => $companies->id,
            'name' => 'company-edit',
            'display_name' => 'Editar Empresas'
        ]);

        Permission::firstOrCreate([ //19
            'group_id' => $companies->id,
            'name' => 'company-delete',
            'display_name' => 'Deletar Empresas'
        ]);

        $deliveries = Group::firstOrCreate([
            'name' => 'Entregas'
        ]);

        Permission::firstOrCreate([ //20
            'group_id' => $deliveries->id,
            'name' => 'delivery-view',
            'display_name' => 'Visualizar Entregas'
        ]);

        Permission::firstOrCreate([ //21
            'group_id' => $deliveries->id,
            'name' => 'delivery-create',
            'display_name' => 'Adicionar Entregas'
        ]);

        Permission::firstOrCreate([ //22
            'group_id' => $deliveries->id,
            'name' => 'delivery-edit',
            'display_name' => 'Editar Entregas'
        ]);

        Permission::firstOrCreate([ //23
            'group_id' => $deliveries->id,
            'name' => 'delivery-delete',
            'display_name' => 'Deletar Entregas'
        ]);

        $deliveries = Group::firstOrCreate([
            'name' => 'Métodos',
            'parent_id' => $deliveries->id
        ]);

        Permission::firstOrCreate([ //24
            'group_id' => $deliveries->id,
            'name' => 'method-view',
            'display_name' => 'Visualizar Métodos'
        ]);
    }
}
