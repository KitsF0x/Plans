<?php

namespace Tests\Feature;

use App\Models\Plan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlansManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_render_plan_create_form() 
    {
        // Act
        $response = $this->get(route('plan.create'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs("plan.create");
    }
    public function test_can_create_new_plan()
    {
        // Arrange
        $this->withoutExceptionHandling();

        // Act
        $response = $this->post(route("plan.store"), [
            'title' => 'My plan',
        ]);

        // Assert
        $this->assertEquals(1, Plan::count());
        $response->assertRedirect(route("plan.show", 1));
    }

    public function test_can_show_all_plans() 
    {
        // Arrange
        $this->withoutExceptionHandling();
        Plan::create(['title' => 'My plan']);
        Plan::create(['title' => 'My plan2']);
        // Act
        $response = $this->get(route("plan.index"));

        // Assert
        $response->assertOk();
        $response->assertViewIs("plan.index");
        $response->assertSee("My plan");
        $response->assertSee("My plan2");
    }

    public function test_can_show_plan_edit_form() {
        // Arrange
        $this->withoutExceptionHandling(); 
        $plan = Plan::create(['title' => 'My plan']);

        // Act
        $response = $this->get(route("plan.edit", $plan->id));

        // Assert
        $response->assertOk();
        $response->assertViewIs("plan.edit");
        $response->assertSee("My plan");
    }

    public function test_can_update_plan() 
    {
        // Arrange
        $this->withoutExceptionHandling();
        $plan = Plan::create(['title' => 'My plan']);

        // Act
        $response = $this->patch(route("plan.update", $plan->id), [
            'title' => 'My plan2',
        ]);

        // Assert
        $this->assertEquals("My plan2", Plan::find($plan->id)->title);
        $response->assertRedirect(route("plan.index"));
    }

    public function test_can_delete_plan()
    {
        // Arrange
        $this->withoutExceptionHandling();
        $plan = Plan::create(['title' => 'My plan']);

        // Act
        $response = $this->delete(route("plan.destroy", $plan->id));

        // Assert
        $this->assertEquals(0, Plan::count());
        $response->assertRedirect(route("plan.index"));
    }

    public function test_can_show_task_details() 
    {
        // Arrange
        $this->withoutExceptionHandling();
        $plan = Plan::create(['title' => 'My plan']);

        // Act
        $response = $this->get(route('plan.show', $plan->id));

        // Assert
        $response->assertOk();
        $response->assertViewIs("plan.show");
        $response->assertSee("My plan");
    }
}
