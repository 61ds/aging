<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Creates base rbac authorization data for our application.
 * -----------------------------------------------------------------------------
 * Creates 6 roles:
 *
 * - theCreator : you, developer of this site (super admin)
 * - admin      : your direct clients, administrators of this site
 * - editor     : editor of this site
 * - support    : support staff
 * - premium    : premium member of this site
 * - member     : user of this site who has registered his account and can log in
 *
 * Creates 7 permissions:
 *
 * - usePremiumContent  : allows premium members to use premium content
 * - createArticle      : allows editor+ roles to create articles
 * - updateOwnArticle   : allows editor+ roles to update own articles
 * - updateArticle      : allows admin+ roles to update all articles
 * - deleteArticle      : allows admin+ roles to delete articles
 * - adminArticle       : allows admin+ roles to manage articles
 * - manageUsers        : allows admin+ roles to manage users (CRUD plus role assignment)
 *
 * Creates 1 rule:
 *
 * - AuthorRule : allows editor+ roles to update their own content
 */
class RbacController extends Controller
{
    /**
     * Initializes the RBAC authorization data.
     */
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        //---------- RULES ----------//

        // add the rule
        $rule = new \common\rbac\rules\AuthorRule;
        $auth->add($rule);

        //---------- PERMISSIONS ----------//


        // add "manageUsers" permission
        $manageUsers = $auth->createPermission('manageUsers');
        $manageUsers->description = 'Allows admin+ roles to manage users';
        $auth->add($manageUsers);


        //---------- ROLES ----------//

        // add "member" role
        $member = $auth->createRole('member');
        $member->description = 'Registered users, members of this site';
        $auth->add($member);

        // add "investor" role
        $investor = $auth->createRole('investor');
        $investor->description = 'Registered users, investors of this site';
        $auth->add($investor);

        // add "investor" role
        $community = $auth->createRole('community member');
        $community->description = 'Registered users, community members of this site';
        $auth->add($community);

        // add "investor" role
        $senior = $auth->createRole('senior');
        $senior->description = 'Registered users, seniors of this site';
        $auth->add($senior);

        // add "investor" role
        $leaders = $auth->createRole('leaders circle member');
        $leaders->description = 'Registered users, leaders circle members of this site';
        $auth->add($leaders);

        // add "investor" role
        $alliance = $auth->createRole('alliance member');
        $alliance->description = 'Registered users, alliance members of this site';
        $auth->add($alliance);

        // add "investor" role
        $startup = $auth->createRole('startup');
        $startup->description = 'Registered users, startup members of this site';
        $auth->add($startup);


        // add "support" role
        // support can do everything that member and premium can, plus you can add him more powers
        $ambassador = $auth->createRole('ambassador');
        $ambassador->description = 'Ambassador';
        $auth->add($ambassador);
        $auth->addChild($ambassador, $member);


        // add "admin" role and give this role: 
        // manageUsers, updateArticle adn deleteArticle permissions, plus he can do everything that editor role can do.
        $admin = $auth->createRole('admin');
        $admin->description = 'Administrator of this application';
        $auth->add($admin);
        $auth->addChild($admin, $ambassador);
        $auth->addChild($admin, $manageUsers);

        // add "theCreator" role ( this is you :) )
        // You can do everything that admin can do plus more (if You decide so)
        $theCreator = $auth->createRole('theCreator');
        $theCreator->description = 'You!';
        $auth->add($theCreator); 
        $auth->addChild($theCreator, $admin);

        if ($auth) 
        {
            $this->stdout("\nRbac authorization data are installed successfully.\n", Console::FG_GREEN);
        }
    }
}