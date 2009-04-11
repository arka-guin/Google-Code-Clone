class CreateZones < ActiveRecord::Migration
  def self.up
    create_table :zones do |t|
      t.string :name
    end
  end

  def self.down
    drop_table :zones
  end
end
